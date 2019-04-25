<?php

$db="bdunad05";
$username="root";
$host="localhost";
$password="12345678";

$con = mysqli_connect("$host","$username","$password","$db");

if (mysqli_connect_errno())
{
    echo "Fallo conexión a MySQL: " . mysqli_connect_error();
}
?>