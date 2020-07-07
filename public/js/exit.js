// Handler del formulario de registro de salidas

const exitHandler = () => {
    console.log("Exit button clicked")
    let exitName = document.getElementById('exit-name').value;
    let exitDocument = document.getElementById('exit-document').value;
    let exitTemperature = document.getElementById('exit-temperature').value;
    let exitDay = document.getElementById('exit-day').value;
    let exitTime = document.getElementById('exit-time').value;
    let token = document.getElementById('token-exit').value;

    data = {
        "nombreSalida": exitName,
        "documentoSalida": exitDocument,
        "temperaturaSalida": exitTemperature,
        "diaVisitante": exitDay,
        "horaVisitante": exitTime,
        "_token": token
    }
    console.log(data)
    validateExit(exitName, exitDocument, exitTemperature)

}
const validateExit = (exitName, exitDocument, exitTemperature) => {
    let responseExit = document.getElementById('response-exit')

    if (exitName == "" || exitDocument == "" || exitTemperature == "") {
        responseExit.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Debes llenar todos los campos
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
     
    } else {

        responseExit.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           Registro de salida Exitoso
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
        setTimeout(() => {
            responseExit.innerHTML = ``
            document.getElementById('exit-form').reset()
        }, 2000);
    }
   
}

const getTimeAndHourExit = () => {
    let timePicker = document.getElementById('exit-time')
    // dey mes ano
    let datePickerId = document.getElementById("exit-day")
    datePickerId.min = new Date().toISOString().split("T")[0];
    datePickerId.max = new Date().toISOString().split("T")[0];
    datePickerId.value = new Date().toISOString().split("T")[0];

    date = new Date()
    // console.log(date);
    // day = date.getDate();
    // month = date.getMonth()+1;
    // year = date.getFullYear();
    hours = date.getHours();
    minutes = date.getMinutes();

    // fullDay =`${day}/${month}/${year}` 
    if (hours < 10) {
        fullTime = `0${hours}:${minutes}`
        if (minutes < 10) {
            fullTime = `0${hours}:0${minutes}`
        }
    } else {
        fullTime = `${hours}:${minutes}`
        if (minutes < 10) {
            fullTime = `${hours}:0${minutes}`
        }
    }
    if (minutes < 10) {

    }
    // asigancion automatica
    timePicker.value = fullTime;
}
//  getTimeAndHour()
