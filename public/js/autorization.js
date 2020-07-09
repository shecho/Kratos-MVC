// Handler del formulario de autorizacion

const autorizationHandler = () => {
    let documentAutorization = document.getElementById("autorization-document")
        .value;
    let token = document.getElementById("token-autorization").value;
    let data = {
        documento: documentAutorization,
        _token: token
    };
    let state
    // console.log(data);
    //  console.log(data.token);
    //  console.log(`La data es: ${data.documento}`);
    validateAutorization(documentAutorization);
    if(documentAutorization == '123'){
        state = true
    }else{
        state = false
    }
    
    validateAutorizationResponse(state);
};

//Valida si los datos del formulario estn llenos y envia un mensaje respectivo
const validateAutorization = documentAutorization => {
    // console.log(documentAutorization);
    let responseAutorization = document.getElementById("response-autorization");
    if (documentAutorization !== "") {
        // console.log("no esta vacio");

        responseAutorization.innerHTML = `
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           Consultando
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
        setTimeout(() => {
            responseAutorization.innerHTML = ``;
        }, 1000);
    } else {
        // console.log("esta vacio");
        responseAutorization.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Ingresa un documento
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
    }
};

// Valida la respuesta del backend muestra pinta el estado de la autorizacion
const validateAutorizationResponse = state => {
    let serverResponse = document.getElementById("sever-response-autorization");

    console.log(serverResponse);
    if (state == true) {
        setTimeout(() => {
            serverResponse.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            EL usuario esta autorizado
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>`;
        }, 1100);
    } else {
        setTimeout(() => {
        serverResponse.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           EL usuario no esta autorizado
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
        </div>`;
        }, 1300);
    }
};
