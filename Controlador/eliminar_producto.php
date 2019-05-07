<?php
if (empty($_POST['delete_id'])) {
    echo "ID esta vacio";
} else {
    require('../config.php');
    $IdProducto = $_POST['delete_id'];

    $query = "DELETE FROM tabla05  WHERE id='".$IdProducto."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    if ($result) {
        echo "Datos grabados satisfactoriamente";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
}

?>