let nameValue
let workingDaysArray = [];

function getEmployeeID(){
    document.getElementById("kinetotherapist_id")
        .addEventListener("change", function() {
            nameValue = document.getElementById("kinetotherapist_id").value;
            getScheduleInfo()
        })
}

function getScheduleInfo() {

    if(!isNaN(parseInt(nameValue))){

        axios.get(`http://localhost:880/api/employee/${nameValue}`)
            .then(function (response) {
                workingDaysArray = [];
                response.data.forEach(function(obj) {
                    workingDaysArray.push(obj["day"])
                });
                console.log(workingDaysArray);
            })
            .catch(function (error) {
                console.log(error);
            }).then(disableDates)
    }
}

function disableDates(){
    let todayDate = new Date().toISOString().slice(0, 10);

    flatpickr("#dateID", {
        minDate: todayDate,
        "disable": [
            function(date) {
                return (!workingDaysArray.includes(date.getDay()));
            }
        ],
        "locale": {
            "firstDayOfWeek": 1 // start week on Monday
        }
    });
    document.getElementById("dateID").setAttribute("min", todayDate);
}


getEmployeeID();




