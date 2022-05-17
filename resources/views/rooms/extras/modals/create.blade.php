<div class="modal fade" id="addRooms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Habitacion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nombre Habitacion</label>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    <input class="form-control form-control-alternative"
                                        placeholder="Nombre del Establecimiento" type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">Capacidad Habitacion</label>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    <input class="form-control form-control-alternative"
                                        placeholder="Nombre del Establecimiento" type="number">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Tipo Establecimiento</label>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    <select class="form-control" name="" id="">
                                        <option value="" disabled selected>Seleccione tipo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">Areas Habitacion</label>
                            <select multiple="" class="form-control" name="">
                                <option value="" selected disabled>Seleccione areas</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success"><strong>GUARDAR</strong></button>
            </div>
        </div>
    </div>
</div>
