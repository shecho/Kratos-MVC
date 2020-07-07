// Handler del formulario de actualizacion de datos
//   documento de identidad , nombres, apellidos, programa, centro,
//  telefono, barrio, minucipio y medio de tr   ansporte,

const UpdateDataHandler = () => {
    // console.log("Update data Butoton clicked");
    let updateName = document.getElementById("update-name").value;
    let updatePhone = document.getElementById("update-phone").value;
    let updateTransport = document.getElementById("update-transport").value;
    let updateHood = document.getElementById("update-hood").value;
    let updateCity = document.getElementById("update-city").value;
    let updateProgram = document.getElementById("update-program").value;
    let updateCenter = document.getElementById("update-center").value;
    let token = document.getElementById("token-update").value;

    data = {
        name: updateName,
        phone: updatePhone,
        transport: updateTransport,
        hood: updateHood,
        city: updateCity,
        program: updateProgram,
        center: updateCenter,
        _token: token
    };
    // console.log(data);
    validateUpdate(updateName,updatePhone,updateTransport,updateHood,updateCity,updateProgram,updateCenter);
};

const validateUpdate = (
    updateName,
    updatePhone,
    updateTransport,
    updateHood,
    updateCity,
    updateProgram,
    updateCenter
) => {
        console.log(updateName,updatePhone,updateTransport,updateHood,updateCity,updateProgram,updateCenter);
        let responseUpdate= document.getElementById('response-update')
        
    // console.log(responseUpdate);
    if (
        updateName == "" ||
        updatePhone == "" ||
        updateTransport == "" ||
        updateHood == "" ||
        updateCity == "" ||
        updateProgram == "" ||
        updateCenter == ""
    ) {
        responseUpdate.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Debes llenar todos los campos
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
      
    } else {
        responseUpdate.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           Actualizando Datos
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
        setTimeout(() => {
            responseUpdate.innerHTML = ``;
        }, 2000);
    }
};
const validateServerResponse = (params) => {
    console.log("data updated");
}
