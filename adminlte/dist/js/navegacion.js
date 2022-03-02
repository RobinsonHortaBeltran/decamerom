
function tipo_habitacion() {
    var url = "../pagesC/tipo_habitacion.php";
    $.ajax({
        url: url,
        method: "POST",
        
        success: function(respuesta) {
            
            $(".ajax_response").html(respuesta);
            $(".box-title").html("TIPO DE HABITACION");
            get_habitaciones();
        },
        error: function() {
            console.log("No se ha podido obtener la información");
        }
    });
}
function get_habitaciones() {
    var url = "http://127.0.0.1:8000/api/habitaciones";
    $.ajax({
        url: url,
        method: "get",
        datatype: "JSON",
        success: function(respuesta) {
            
            $('#tipos_habitacion tbody').empty();
            //  console.log(respuesta);
            respuesta.forEach(e => {
                var detalle='<tr style="cursor:pointer;"> '+
                '<td style="text-align:center;"  >' + e.id + '</td>' +
                '<td style="text-align:center;"  >' + e.nombre + '</td>' +
                '<td style="text-align:center;"  >' + e.acomodacion_habitacion[0].nombre + '</td>'+ 
                '<td style="text-align:center;"  >' + e.acomodacion_habitacion[0].nombre + '</td>'+'</tr>';
                $('#tipos_habitacion tbody').append(detalle);
                console.log(detalle);
            });
            
        },
        error: function() {
            console.log("No se ha podido obtener la información");
        }
    });
}

function registro_hotel(){
    
}
