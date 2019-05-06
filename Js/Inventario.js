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
        }
    })
    event.preventDefault();
})