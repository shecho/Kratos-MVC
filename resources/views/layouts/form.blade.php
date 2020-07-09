<!-- consultar autorizacion -->
<div class="modal fade" id="check-autorization" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="ModalLabel">Consultar autorizacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf

                    <input type="hidden" value="{{ csrf_token() }}" id="token-autorization" />
                    <!-- <input type="hidden" value="{{ csrf_token() }}" id="token" /> -->
                    <div class="form-group">
                        <input placeholder="Documento" type="text" class="form-control" id="autorization-document">
                    </div>

                </form>
            </div>
            <div class="p-2 form-group" id="response-autorization">
                
            </div>
            <div class="p-2 form-group" id="sever-response-autorization">
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button onclick="autorizationHandler()" id="autorization-btn" type="button" class="btn btn-dark">
                    Confirmar</button>

            </div>
        </div>
    </div>
</div>
<!--  -->


<!-- registrar entrada -->
<div class="modal fade" id="register-entrace" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="ModalLabel1">Registrar Entrada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="visit-form">
                    @csrf
                    <input type="hidden" value="{{ csrf_token() }}" id="token-visit" />
                    <div class="form-group">
                        <input placeholder="Nombre Completo" type="text" class="form-control" id="entrace-name">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input placeholder="Documento" type="number" class="form-control" id="entrace-document">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input placeholder="temperatura" type="number" class="form-control"
                                    id="entrace-temperature">
                            </div>
                            <div class="form-group">
                                <input disabled min="" max="" type="date" class="form-control" id="entrace-day">
                            </div>
                            <div class="form-group">
                                <input disabled placeholder="Hora" type="time" class="form-control" id="entrace-time">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-group p-2" id="validation-visit">
                validation visit here
            </div>
            <div class="form-group p-2" id="server-response-visit">
                restonse response visit here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button onclick="visitHandler()" id="confirm-visit" type="button" class="btn btn-dark">
                    Confirmar</button>
            </div>
        </div>
    </div>
</div>
<!--  entrada -->


<!-- registrar salida -->
<div class="modal fade" id="register-exit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="ModalLabel2">Registrar Salida</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="exit-form">
                    @csrf
                    <input type="hidden" value="{{ csrf_token() }}" id="token-exit" />
                    <div class="form-group">
                        <input placeholder="Nombre Completo" type="text" class="form-control" id="exit-name">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input placeholder="Documento" type="number" class="form-control" id="exit-document">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input placeholder="temperatura" type="number" class="form-control"
                                    id="exit-temperature">
                            </div>
                            <div class="form-group">
                                <input disabled min="" max="" type="date" class="form-control" id="exit-day">
                            </div>
                            <div class="form-group">
                                <input disabled placeholder="Hora" type="time" class="form-control" id="exit-time">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-group p-2" id="response-exit">
                response exit here
            </div>
            <div class="form-group p-2" id="server-response-exit">
                restonse response exit here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button onclick="exitHandler()" id="confirm-exit" type="button" class="btn btn-dark"> Confirmar</button>
            </div>
        </div>
    </div>
</div>
<!-- salida -->

<!-- Actualizar datos -->
<div class="modal fade" id="update-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="ModalLabel3">Actualizar datos pendientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    @csrf
                    <input type="hidden" value="{{ csrf_token() }}" id="token-update" />
                    <div class="form-group">
                        <input placeholder="Nombre Completo" type="text" class="form-control" id="update-name">
                    </div>
                    <div class="form-group">
                        <!-- <div class="form-group">
                            <input placeholder="Documento" type="number" class="form-control" id="update-document">
                        </div> -->
                        <div class="form-group">
                            <input placeholder="Telefono" type="number" class="form-control" id="update-phone">
                        </div>
                        <div class="form-group">
                            <input placeholder="Medio de Transporte" type="text" class="form-control"
                                id="update-transport">
                        </div>
                        <div class="form-group">
                            <input placeholder="Barrio" type="text" class="form-control" id="update-hood">
                        </div>
                        <div class="form-group">
                            <input placeholder="Municipio" type="text" class="form-control" id="update-city">
                        </div>
                        <div class="form-group">
                            <input placeholder="Programa" type="text" class="form-control" id="update-program">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="time" id="update-center">
                                <option value="CDMC">CDMC</option>
                                <option value="CTM">CTM</option>
                                <option value="CDCDM">CDCDM</option>

                            </select>
                            <!-- <input placeholder="Centro" type="text" class="form-control" id="update-center"> -->
                        </div>

                    </div>
                </form>
            </div>
            <div class="form-group p-2" id="response-update">
                <h6>response update here </h6>
            </div>
            <div class="form-group p-2" id="response-server-update">
                <h6>response server update here </h6>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button onclick="UpdateDataHandler()" id="confirm-update" type="button" class="btn btn-dark">
                    Confirmar</button>
            </div>
        </div>
    </div>
</div>
<!-- salida -->
