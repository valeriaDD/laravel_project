/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/appointment.js ***!
  \*************************************/
nameValue = document.getElementById("kinetotherapist_id").value;
getScheduleInfo();
var workingDaysArray = [];
var responseJSON = {};
var workingHoursRange = [];

function getEmployeeID() {
  document.getElementById("kinetotherapist_id").addEventListener("change", function () {
    workingHoursRange = [];
    nameValue = document.getElementById("kinetotherapist_id").value;
    getScheduleInfo();
  });
}

function getScheduleInfo() {
  if (!isNaN(parseInt(nameValue))) {
    axios.get("http://localhost:880/api/schedule/".concat(nameValue)).then(function (response) {
      workingDaysArray = [];
      responseJSON = response.data;
      responseJSON.forEach(function (obj) {
        workingDaysArray.push(obj["day"]);
      });
    })["catch"](function (error) {
      console.log(error);
    }).then(disableDates);
  } else {
    flatpickr("#dateID", {
      enable: [false]
    });
    document.getElementById('time').disabled = true;
  }
}

function disableDates() {
  flatpickr("#dateID", {
    minDate: "today",
    "disable": [function (date) {
      return !workingDaysArray.includes(date.getDay());
    }],
    "locale": {
      "firstDayOfWeek": 1 // start week on Monday

    },
    onChange: function onChange(selectedDates) {
      displayWorkingHours(selectedDates[0].getDay());
    }
  });
}

function displayWorkingHours(day) {
  document.getElementById('time').disabled = false;
  responseJSON.forEach(function (obj) {
    var startWorkingTime = new Date();
    var endWorkingTime = new Date();

    if (obj["day"] === day) {
      startWorkingTime = transformToHourFormat(obj["start_time"]);
      endWorkingTime = transformToHourFormat(obj["end_time"]);
      var ranges = [];
      var date = new Date();
      var format = {
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric'
      };

      for (var minutes = 0; minutes < 24 * 60; minutes = minutes + 15) {
        date.setHours(0);
        date.setMinutes(minutes);
        if (date.getTime() <= endWorkingTime.getTime() && date.getTime() >= startWorkingTime.getTime()) ranges.push(date.toLocaleTimeString('ru', format));
      }

      workingHoursRange = ranges;
      filterAppointments(ranges);
    }
  });
}

function filterAppointments(ranges) {
  var dateValue = document.getElementById("dateID").value;
  axios.get("http://localhost:880/api/appointments/1").then(function getIt(response) {
    response.data.forEach(function (obj) {
      if (dateValue === obj["date"]) {
        var startTime = transformToHourFormat(obj["start_time"]);
        var endTime = transformToHourFormat(obj["end_time"]);
        ranges = ranges.filter(function (range) {
          range = transformToHourFormat(range);
          return !(range.getTime() <= endTime.getTime() && range.getTime() >= startTime.getTime());
        });
      }
    });
    addWorkingHoursToHTML(ranges);
  });
}

function transformToHourFormat(stringTime) {
  var time = new Date();
  var Hour = stringTime.split(":")[0];
  var Minute = stringTime.split(":")[1];
  time.setHours(Hour);
  time.setMinutes(Minute);
  return time;
}

function addWorkingHoursToHTMLTemplate(range) {
  hourMinutes = range.split(":");
  return "\n      <option\n         value=\"".concat(range, "\" >").concat(hourMinutes[0], ":").concat(hourMinutes[1], "\n      </option>\n     ");
}

function addWorkingHoursToHTML(ranges) {
  var optionPlace = document.getElementById('time');
  optionPlace.innerHTML = '';
  ranges.forEach(function (range) {
    optionPlace.innerHTML += addWorkingHoursToHTMLTemplate(range);
  });
}

getEmployeeID();
/******/ })()
;