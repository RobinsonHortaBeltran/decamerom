
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


function listar_hoteles() {
    var url = "../pagesC/listar_hotel.php";
    $.ajax({
        url: url,
        method: "POST",

        success: function (respuesta) {

            $(".ajax_response").html(respuesta);
            $(".box-title").html("LISTADO DE HOTELES");
            get_hoteles();
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}
