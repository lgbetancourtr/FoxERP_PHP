<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoxERP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.css">
    <link rel="stylesheet" href="css/custom.css">
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
                <a class="nav-link" href="administrador.php">Administrador</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="inventario.php">Inventario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ventas.php">Ventas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="utilidades.php">Utilidades</a>
            </li>
        </ul>

    </nav>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Administrar <b>Productos</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo producto</span></a>
                    </div>
                </div>
            </div>
            <div class='outer_div'></div>
        </div>
    </div>
    
    <!-- Edit Modal HTML -->
	<?php include("Modal/modal_agregar.php");?>

    <!--popper-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!--bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!--Inicio bloque JS-->
    <script src="Js/Inventario.js"></script>
    <!--Fin bloque JS-->


    <!--Inicio bloque PHP-->
      
    
    <!--Fin bloque PHP-->
</body>

</html>