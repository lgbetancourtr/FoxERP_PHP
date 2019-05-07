<?php
    if(empty($_POST['IdProducto']))
    {
        echo "ID esta vacio";
    } elseif (!empty($_POST['IdProducto'])) {
        require('../config.php');

        $IdProducto = $_POST['IdProducto'];
        $CodigoProducto = $_POST['CodigoProducto'];
        $NombreProducto = $_POST['NombreProducto'];
        $MarcaProducto = $_POST['MarcaProducto'];
        $PrecioCompra = floatval($_POST['PrecioCompra']);
        $CantidadCompra = intval($_POST['CantidadCompra']);

        $query = "UPDATE tabla05 SET codigo_producto='".$CodigoProducto."', nombre_producto='".$NombreProducto."', marca_producto='".$MarcaProducto."', precio_compra='".$PrecioCompra."', cantidad_comprada='".$CantidadCompra."' WHERE id='".$IdProducto."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        if ($result) {
            echo "Datos grabados satisfactoriamente";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
        
        mysqli_close($con);
    }
?>