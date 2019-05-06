<?php
    require('../config.php');
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