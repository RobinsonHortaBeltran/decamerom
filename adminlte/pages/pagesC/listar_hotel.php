<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" id="listado_hotel">
                <thead>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">NOMBRE</th>
                    <th style="text-align: center">NIT</th>
                    <th style="text-align: center">CIUDAD</th>
                    <th style="text-align: center">DIRECCION</th>
                    <th style="text-align: center">TELEFONO</th>
                    <th style="text-align: center">CORREO</th>
                    <th style="text-align: center">CANT HABITACIONES</th>
                    <th style="text-align: center">ACCION</th>

                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar tipo de habitacion</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Cantidad de habitaciones disponibles</label>
                        <input type="text" id="h_disponibles" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">cantidad de habitaciones</label>
                        <input type="text" class="form-control" id="h_asignadas" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <button style="margin-top:25px;" class="btn btn-primary add_h" ><i class='fa fa-plus-square' aria-hidden='true'></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Acomodamientos disponibles</label>
                        <select name="" class="form-control" id="listado_habitaion">

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="contenido">
                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="guardar_asignacion();" class="btn btn-success" >Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
            </div>
        </div>

    </div>
</div>