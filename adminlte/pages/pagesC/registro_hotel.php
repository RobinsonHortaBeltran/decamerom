<div class="container">
<div class="row align-items-start">
    <div class="col-md-4">
    <label for="">Nombre</label>
    <input type="text" class="form-control" id="nombre_hotel" placeholder="Ingrese el nombre del hotel">
    </div>
    <div class="col-md-4">
    <label for="">Direccion</label>
    <input type="text" class="form-control" id="direccion_hotel" placeholder="Ingrese la direccion del hotel">
    </div>
    <div class="col-md-4">
    <label for="">Ciudad</label>
    <select name="" class="form-control" id="ciudad_hotel"></select>
    </div> 
  </div>
<br>
  <div class="row align-items-start">
    <div class="col-md-4">
    <label for="">Nit</label>
    <input type="text" class="form-control" id="nit_hotel" placeholder="Ingrese el nit del hotel">
    </div>
    <div class="col-md-4">
    <label for="">Telefono</label>
    <input type="phone" class="form-control" id="telefono_hotel" placeholder="Ingrese el telefono del hotel">
    </div>
    <div class="col-md-4">
    <label for="">Correo</label>
   <input type="emil" class="form-control" id="correo_hotel" placeholder="Ingrese el correo del hotel">
    </div>
    
  </div>
  <br>
  <div class="row align-items-start">
    <div class="col-md-4">
    <label for="">Numero de habitaciones</label>
    <input type="number" class="form-control" id="habitaciones_hotel" placeholder="Ingrese el nuero de habitaciones disponibles del hotel">
    </div>
    <div class="col-md-4">
    <label for="">Estado</label>
    <select name="" class="form-control" id="estado">
        <option value="x">Seleccione</option>
        <option value="activo">Activo</option>
        <option value="inactivo">Inactivo</option>

    </select>
    </div>
    <div class="col-md-4">
  <button class="btn btn-success btn-block" style="margin-top: 25px;" onclick="create_ciudades();"> Guardar</button>
    </div>
    
  </div>
</div>