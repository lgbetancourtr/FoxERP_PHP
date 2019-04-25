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
    <style>
        html,
        body {
            height: 100%;
            background-color: #FFB300;
        }

        .as-full {
            width: 100%;
            height: 100%;
        }

        .form-control {
            padding-left: 30px;
            padding-right: 30px;
        }

        .iconinput {
            position: relative;
            z-index: 1;
            left: 10px;
            top: -31px;
            width: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid as-full">
        <div class="row as-full d-flex justify-content-center">
            <div class="col-5 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">FoxERP</h5>
                        <form id="frmLogin" action="" method="POST" name="ingreso">
                            <div class="form-group">
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp"
                                    placeholder="Correo electronico"><i class="iconinput fa fa-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="txtClave" name="txtClave" placeholder="Contraseña"><i
                                    class="iconinput fa fa-keyboard"></i>
                            </div>
                            <button type="submit" class="col-md-12 btn btn-primary">Ingresar</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-1">
                    <div class="card-body">
                        <small>¿No tiene usuario? Registrese <a href="#">aquí</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--bloque libs javascript-->
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
    <!--fin bloque libs javascript-->
    <!--Inicio bloque PHP-->
    <?php
        require('config.php');
        session_start();
        if (isset($_POST['txtEmail'])){
            $user = $_POST['txtEmail'];
            $pass = $_POST['txtClave'];
            $query = "SELECT * FROM usuarios WHERE estado_usuario=1 and nombre_usuario='$user' and contraseña_usuario='".md5($pass)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
	            $_SESSION['start'] = time();
	            $_SESSION['expire'] = $_SESSION['start'] + (3600);
         
	            header("Location: administrador.php");
            } else {
                echo "<div class='form'>
                        <h3>Username/password incorrectos.</h3>
                        <br/>Click aquí <a href='index.php'>Login</a>
                    </div>";
            }
        }
    ?>
    <!--Fin bloque PHP-->
</body>

</html>