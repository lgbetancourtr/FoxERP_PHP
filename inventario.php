<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoxERP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <!--<img src="bird.jpg" alt="logo" style="width:40px;">-->
            <i class="fas fa-dragon"></i>
        </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="administrador.html">Administrador</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="inventario.html">Inventario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ventas.html">Ventas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="utilidades.html">Utilidades</a>
            </li>
        </ul>

    </nav>

    <div class="row">
        <div class="col col-lg-2"></div>        
        <div class="col col-lg-6">
            <h4>Producto</h4>
       
            <form id="frmProducto" action="" method="POST" name="frmProducto">
                
                <div class="form-group">
                    <label for="lbCodigoProducto">Código de producto</label>
                    <input type="text" class="form-control form-control-sm" id="txtCodigoProducto" name="txtCodigoProducto" aria-describedby="Codigo producto" placeholder="Código producto">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>                
                <div class="form-group">
                    <label for="lbNombreProducto">Nombre de producto</label>
                    <input type="text" class="form-control form-control-sm" id="txtNombreProducto" name="txtNombreProducto" aria-describedby="Nombre producto" placeholder="Nombre producto">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>                        
                <div class="form-group">
                    <label for="lbMarcaProducto">Marca de producto</label>
                    <input type="text" class="form-control form-control-sm" id="txtMarcaProducto" name="txtMarcaProducto" aria-describedby="Marca producto" placeholder="Marca producto">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>            
                <div class="form-group">
                    <label for="lbPrecioCompra">Precio de compra</label>
                    <input  type="number" min="1" step="any" class="form-control form-control-sm" id="txtPrecioCompra" name="txtPrecioCompra" aria-describedby="Precio compra" placeholder="Precio compra">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>                        
                <div class="form-group">
                    <label for="lbCantidadCompra">Cantidad de compra</label>
                    <input  type="number" min="1" step="any" class="form-control form-control-sm" id="txtCantidadCompra" name="txtCantidadCompra" aria-describedby="Cantidad compra" placeholder="Cantidad compra">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
            
                <button class="btn btn-primary" type="submit">Guardar</button>            
            
            </form>
        </div>        
    </div>

    <!--popper-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!--bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!--Inicio bloque PHP-->
    <?php
    require('config.php');
    if (isset($_POST['txtCodigoProducto'])){
        $codigo_producto = $_POST['txtCodigoProducto'];
        $nombre_producto = $_POST['txtNombreProducto'];
        $marca_producto = $_POST['txtMarcaProducto'];
        $precio_compra = $_POST['txtPrecioCompra'];
        $cantidad_comprada = $_POST['txtCantidadCompra'];

        $query = "INSERT INTO tabla05 (codigo_producto, nombre_producto, marca_producto,precio_compra,cantidad_comprada) VALUES ('$codigo_producto', '$nombre_producto', '$marca_producto', '$precio_compra', '$cantidad_comprada')";

        $result = mysqli_query($con,$query) or die(mysql_error());

        if ($result) {
            echo "Datos grabados satisfactoriamente";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
        
        mysqli_close($con);
    }
    ?>
    <!--Fin bloque PHP-->
</body>

</html>