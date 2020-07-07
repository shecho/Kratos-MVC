// Handler del formulario de registro de visitas

const visitHandler = () => {
    // console.log("Visit confirm button")

    let visitorName= document.getElementById('entrace-name').value;
    let visitorDocument= document.getElementById('entrace-document').value
    let visitorTemperature= document.getElementById('entrace-temperature').value
    let visitorDay= document.getElementById('entrace-day').value;
    let visitorTime= document.getElementById('entrace-time').value;
    let token= document.getElementById('token-visit').value;

    data={
        "nombreVisitante":visitorName,
        "documentoVisitante":visitorDocument,
        "temperaturaVisitante":visitorTemperature,
        "diaVisitante":visitorDay ,
        "horaVisitante":visitorTime,
        "_token": token
    }
    console.log(data)
    validateVisitor(visitorName,visitorDocument,visitorTemperature)

    
}

const validateVisitor = (visitorName,visitorDocument,visitorTemperature) => {  
   


    let visitValidation = document.getElementById("validation-visit");
    if (visitorName == "" || visitorDocument == "" || visitorTemperature == "") {
       // console.log("esta vacio");
       visitValidation.innerHTML = `
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Debes llenar todos los campos
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
       </div>
       `;

      
    } else {
       
        visitValidation.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           Registrando Entrada
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
        setTimeout(() => {
            visitValidation.innerHTML = ``
           
            
        }, 2000);
    }
    
}
    
const validateVisitResponse = (state) => {
    console.log(respuesta);
    if (state =='1') {
       
       console.log("Visita reisitrada")
    } else {
       console.log('faltan datos del visitante');
    }
 }

 const getTimeAndHour = () => {
    let timePicker= document.getElementById('entrace-time')
    // dey mes ano
    let datePickerId = document.getElementById("entrace-day")
    datePickerId.min = new Date().toISOString().split("T")[0];
    datePickerId.max = new Date().toISOString().split("T")[0];
    datePickerId.value= new Date().toISOString().split("T")[0];

    date = new Date()
    console.log(date);
    // day = date.getDate();
    // month = date.getMonth()+1;
    // year = date.getFullYear();
    hours = date.getHours();
    minutes = date.getMinutes();

    // fullDay =`${day}/${month}/${year}` 
    if(hours < 10 )
    {   
        fullTime = `0${hours}:${minutes}`
        if (minutes <10){
            fullTime = `0${hours}:0${minutes}`
        }
    }else {
        fullTime = `${hours}:${minutes}`
        if (minutes <10) {
            fullTime = `${hours}:0${minutes}`
        }
    }
    if(minutes<10){
        
    }
    // asigancion automatica
    timePicker.value = fullTime;
 }
//  getTimeAndHour()