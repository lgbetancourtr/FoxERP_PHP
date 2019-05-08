$(function () {
    CargarProductos()
})

function CargarProductos() {
    $.ajax({
        url: 'Controlador/consultar_producto.php',
        beforeSend: function (objeto) {
            $("#loader").html("Cargando...");
        },
        success: function (data) {
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
            CargarProductos()
        }
    })
    event.preventDefault();
})

$("#frmProductoEdit").submit(function (event) {
    var parametros = $(this).serialize()
    $.ajax({
        type: "POST",
        url: "Controlador/editar_producto.php",
        data: parametros,
        beforeSend: function (objeto) {
            $("#resultados").html("Enviando...");
        },
        success: function (datos) {
            $("#resultados").html(datos);
            $('#editProductModal').modal('hide');
            CargarProductos()
        }
    })
    event.preventDefault();
})

$("#editProductModal").on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var code = button.data('code')
    var name = button.data('name')
    var marca = button.data('marca')
    var precio = button.data('precio')
    var cantidad = button.data('cantidad')

    $('#IdProducto').val(id)
    $('#CodigoProducto').val(code)
    $('#NombreProducto').val(name)
    $('#MarcaProducto').val(marca)
    $('#PrecioCompra').val(precio)
    $('#CantidadCompra').val(cantidad)

})

$('#deleteProductModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id')
    $('#delete_id').val(id)
})

$("#delete_product").submit(function (event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "Controlador/eliminar_producto.php",
        data: parametros,
        beforeSend: function (objeto) {
            $("#resultados").html("Enviando...");
        },
        success: function (datos) {
            $("#resultados").html(datos);
            $('#deleteProductModal').modal('hide');
            CargarProductos()
        }
    });
    event.preventDefault();
});

/*
$("#btnPDF").click(function(event){
    $.ajax({
        type: "POST",
        url: "Controlador/generar_pdf.php",        
        beforeSend: function (objeto) {
            $("#resultados").html("Enviando...");
        },
        success: function (datos) {
                        
        }
    });
})*/
