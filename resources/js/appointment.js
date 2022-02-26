nameValue = document.getElementById("kinetotherapist_id").value;
getScheduleInfo()
let workingDaysArray = [];
let responseJSON = {};
let workingHoursRange = []

function getEmployeeID() {
    document.getElementById("kinetotherapist_id")
        .addEventListener("change", function () {
            workingHoursRange = []
            nameValue = document.getElementById("kinetotherapist_id").value;
            getScheduleInfo()
        })
}


function getScheduleInfo() {
    if (!isNaN(parseInt(nameValue))) {
        axios.get(`http://localhost:880/api/schedule/${nameValue}`)
            .then(function (response) {
                workingDaysArray = [];
                responseJSON = response.data;
                responseJSON.forEach(function (obj) {
                    workingDaysArray.push(obj["day"])
                });
            })
            .catch(function (error) {
                console.log(error);
            }).then(disableDates)
    }else{
        flatpickr("#dateID", {
            enable: [false],
        });
        document.getElementById('time').disabled = true;
    }

}

function disableDates() {
    flatpickr("#dateID", {
        minDate: "today",
        "disable": [
            function (date) {
                return (!workingDaysArray.includes(date.getDay()));
            }
        ],
        "locale": {
            "firstDayOfWeek": 1 // start week on Monday
        },
        onChange: function (selectedDates) {
            displayWorkingHours(selectedDates[0].getDay())
        },
    });
}


function displayWorkingHours(day) {
    document.getElementById('time').disabled = false;
    responseJSON.forEach(function (obj) {
        let startWorkingTime = new Date();
        let endWorkingTime = new Date();

        if (obj["day"] === day) {
            startWorkingTime = transformToHourFormat(obj["start_time"])
            endWorkingTime = transformToHourFormat(obj["end_time"])

            let ranges = [];
            const date = new Date();
            const format = {
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric'
            };

            for (let minutes = 0; minutes < 24 * 60; minutes = minutes + 15) {
                date.setHours(0);
                date.setMinutes(minutes);
                if (date.getTime() <= endWorkingTime.getTime() && date.getTime() >= startWorkingTime.getTime())
                    ranges.push(date.toLocaleTimeString('ru', format));
            }
            workingHoursRange = ranges
            filterAppointments(ranges)
        }

    })

}


function filterAppointments(ranges) {
    let dateValue = document.getElementById("dateID").value;

    axios.get(`http://localhost:880/api/appointments/1`)
        .then(function getIt(response) {
            response.data.forEach(function (obj) {
                if (dateValue === obj["date"]) {
                    let startTime = transformToHourFormat(obj["start_time"]);
                    let endTime = transformToHourFormat(obj["end_time"]);

                    ranges = ranges.filter(function (range) {
                        range = transformToHourFormat(range)
                        return !(range.getTime() <= endTime.getTime() &&
                            range.getTime() >= startTime.getTime())
                    })
                }
            });
            addWorkingHoursToHTML(ranges)
        })
}

function transformToHourFormat(stringTime) {
    let time = new Date();
    let Hour = stringTime.split(":")[0]
    let Minute = stringTime.split(":")[1]
    time.setHours(Hour);
    time.setMinutes(Minute);
    return time
}

function addWorkingHoursToHTMLTemplate(range){
    hourMinutes = range.split(":")
    return `
      <option
         value="${range}" >${hourMinutes[0]}:${hourMinutes[1]}
      </option>
     `
}

function addWorkingHoursToHTML(ranges) {
    let optionPlace = document.getElementById('time')
    optionPlace.innerHTML = ''
    ranges.forEach(range =>{
        optionPlace.innerHTML += addWorkingHoursToHTMLTemplate(range)
    })
}

getEmployeeID();





