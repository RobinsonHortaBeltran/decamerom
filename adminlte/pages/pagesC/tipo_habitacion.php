
<div class="container-fluid">
    <diw class="row">
        <div class="col-md-12">
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar</button> -->
        </div>
        <div class="col-md-12" style="margin-top:10px">
            <table class="table table-striped table-bordered" id="tipos_habitacion">
                <thead>
                    <th style="text-align: center" >ID</th>
                    <th style="text-align: center" >TIPO DE HABITACION</th>
                    <th style="text-align: center" >ACOMODAMIENTO</th>
                    <th style="text-align: center" >ACCION</th>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </diw>
</div>



  <!-- Modal -->
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
             <div class="col-md-12">
                 <label for="">Nombre de la habitacion</label>
                 <input type="text" class="form-control" >
             </div>
             <div class="col-md-12">
                 <label for="">Acomodamientos disponibles</label>
                 <select name="" class="form-control" id="">
                     <option value="">Seleccione</option>
                     <option value="1">SENCILLA</option>
                     <option value="2">DOBLE</option>
                     <option value="3">TRIPLE</option>
                 </select>
             </div>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
