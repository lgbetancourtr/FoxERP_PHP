$(function(){
    CargarProductos()
})

function CargarProductos(){
    $.ajax({
        url:'Controlador/consultar_producto.php',        
        beforeSend: function(objeto){
            $("#loader").html("Cargando...");
        },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

$("#frmProducto").submit(function (event) {
    var parametros = $(this).serialize()
    $.ajax({
        type: "POST",
        url: "Controlador/agregar_producto.php",
        data: parametros,
        beforeSend: function (objeto) {
            $("#resultados").html("Enviando...");
        },
        success: function (datos) {
            $("#resultados").html(datos);
            $('#addProductModal').modal('hide');            
        }
    })
    event.preventDefault();
})