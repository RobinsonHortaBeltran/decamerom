


//cargar el html en elq ue se van a cargar los tipos de habitaciones creadas
function tipo_habitacion() {
    
    var url = "../pagesC/tipo_habitacion.php";
    $.ajax({
        url: url,
        method: "POST",

        success: function (respuesta) {

            $(".ajax_response").html(respuesta);
            $(".box-title").html("TIPO DE HABITACION");
            get_habitaciones();
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}
//traer los tipos de habitaciones creadas en la base de datos
function get_habitaciones() {
    var url = "http://127.0.0.1:8000/api/habitaciones";
    $.ajax({
        url: url,
        method: "get",
        datatype: "JSON",
        success: function (respuesta) {

            $('#tipos_habitacion tbody').empty();
            //  console.log(respuesta);
            respuesta.forEach(e => {
                var detalle = '<tr style="cursor:pointer;"> ' +
                    '<td style="text-align:center;"  >' + e.id + '</td>' +
                    '<td style="text-align:center;"  >' + e.nombre + '</td>' +
                    '<td style="text-align:center;"  >' + e.acomodacion_habitacion[0].nombre + '</td>' +
                    '<td style="text-align:center;"  >' + e.acomodacion_habitacion[0].nombre + '</td>' + '</tr>';
                $('#tipos_habitacion tbody').append(detalle);
                console.log(detalle);
            });

        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}
//mostrar el html que contiene el formulario de registro de los hoteles
function registro_hotel() {
    var url = "../pagesC/registro_hotel.php";
    $.ajax({
        url: url,
        method: "POST",

        success: function (respuesta) {

            $(".ajax_response").html(respuesta);
            $(".box-title").html("REGISTRAR HOTEL");
            get_ciudades();
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

//traer las ciudades registradas en la base de datos y cargarlas en el select 
function get_ciudades() {
    
    var url = "http://127.0.0.1:8000/api/ciudades";
    $.ajax({
        url: url,
        method: "get",
        datatype: "JSON",
        success: function (respuesta) {

            var charge_select = "";
            respuesta.forEach(element => {
                var htmlservice = '<option value="' + element.id + '">' + element.nombre + '</option>';
                charge_select += htmlservice;
            });
            $('#ciudad_hotel').append(charge_select);
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}
function create_ciudades() {
    var url = "http://127.0.0.1:8000/api/create_hotel";
    var data = {
        nombre: $("#nombre_hotel").val(),
        direccion: $("#direccion_hotel").val(),
        ciudad: $("#ciudad_hotel").val(),
        nit: $("#nit_hotel").val(),
        telefono: $("#telefono_hotel").val(),
        correo: $("#correo_hotel").val(),
        num_habitaciones: $("#habitaciones_hotel").val(),
        estado: $("#estado").val()
    }
    // console.log(data);
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        datatype: "JSON",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta!='exist') {
                $("#nombre_hotel").val("");
                $("#direccion_hotel").val("");
                $("#ciudad_hotel").val("");
                $("#nit_hotel").val("");
                $("#telefono_hotel").val("");
                $("#correo_hotel").val("");
                $("#habitaciones_hotel").val("");
                $("#estado").val("x")

            ejecutar_alerta("Registro exitoso","success");
            }else{
                ejecutar_alerta("El hotel ya se encuentra registrado","error"); 
            }
            
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

function ejecutar_alerta(sms,icon){
    swal({
        title: sms,
        icon: icon,
        // button: "Aww yiss!",
      });
}
