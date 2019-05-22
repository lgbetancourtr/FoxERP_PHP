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

    <div class="row">
        <div class="col col-lg-2"></div>
        <div class="col col-lg-6">
            <h2>Calculadora venta</h2>
        </div>
        <div class="col col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <!--Valor de compra-->
            <div class="form-group">
                <label for="valordecompra">Valor de compra</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control" id="txtValorCompra" placeholder="Valor compra">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <!--Porcentaje de utilidad-->
            <div class="form-group">
                <label for="porcentajedeutilidad">Porcentaje de utilidad</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="txtPorcentajeUtilidad"
                        placeholder="Porcentaje de utilidad" max="100" min="0">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <!--Porcentaje de impuesto-->
            <div class="form-group">
                <label for="porcentajedeimpuesto">Porcentaje de impuesto (IVA)</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="txtPorcentajeImpuesto"
                        placeholder="Porcentaje de impuesto" max="100" min="0">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <!--Valor de venta-->
            <div class="form-group">
                <label for="valordeventa">Valor de venta</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control-plaintext" id="txtValorVenta" placeholder="Valor venta">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <button type="button" class="btn btn-primary btn-sm" id="btnCalcularProducto">Calcular</button>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-2"></div>
        <div class="col col-lg-6">
            <h2>Calculadora resistencia</h2>
        </div>
        <div class="col col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <div class="form-group">
                <label for="banda1">Banda 1</label>
                <select name="banda1" id="slbanda1" onchange="calcularResistencia(this)" class="form-control"
                    style="color: white; background: #000;">
                    <option value="0" style="color: white; background: black;" selected>Negro (0)</option>
                    <option value="1" style="color: white; background: #583030;">Cafe (1)</option>
                    <option value="2" style="color: white; background: red;">Rojo (2)</option>
                    <option value="3" style="color: black; background: orange;">Naranja (3)</option>
                    <option value="4" style="color: black; background: yellow;">Amarillo (4)</option>
                    <option value="5" style="color: white; background: green;">Verde (5)</option>
                    <option value="6" style="color: white; background: blue;">Azul (6)</option>
                    <option value="7" style="color: white; background: purple;">Violeta (7)</option>
                    <option value="8" style="color: white; background: gray;">Gris (8)</option>
                    <option value="9" style="color: black; background: white;">Blanco (9)</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <div class="form-group">
                <label for="banda2">Banda 2</label>
                <select name="banda2" id="slbanda2" onchange="calcularResistencia(this)" class="form-control"
                    style="color: white; background: #000;">
                    <option value="0" style="color: white; background: black;" selected>Negro (0)</option>
                    <option value="1" style="color: white; background: #583030;">Cafe (1)</option>
                    <option value="2" style="color: white; background: red;">Rojo (2)</option>
                    <option value="3" style="color: black; background: orange;">Naranja (3)</option>
                    <option value="4" style="color: black; background: yellow;">Amarillo (4)</option>
                    <option value="5" style="color: white; background: green;">Verde (5)</option>
                    <option value="6" style="color: white; background: blue;">Azul (6)</option>
                    <option value="7" style="color: white; background: purple;">Violeta (7)</option>
                    <option value="8" style="color: white; background: gray;">Gris (8)</option>
                    <option value="9" style="color: black; background: white;">Blanco (9)</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <div class="form-group">
                <label for="banda3">Banda 3</label>
                <select name="banda3" id="slbanda3" onchange="calcularResistencia(this)" class="form-control"
                    style="color: white; background: #000;">
                    <option value="0" style="color: white; background: black;" selected>Negro (1)</option>
                    <option value="1" style="color: white; background: #583030;">Cafe (10)</option>
                    <option value="2" style="color: white; background: red;">Rojo (100)</option>
                    <option value="3" style="color: black; background: orange;">Naranja (1K)</option>
                    <option value="4" style="color: black; background: yellow;">Amarillo (10K)</option>
                    <option value="5" style="color: white; background: green;">Verde (100K)</option>
                    <option value="6" style="color: white; background: blue;">Azul (1M)</option>
                    <option value="7" style="color: white; background: purple;">Violeta (10M)</option>
                    <option value="8" style="color: white; background: gray;">Gris (100M)</option>
                    <option value="9" style="color: black; background: white;">Blanco (1G)</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>

    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col col-lg-6">
            <div class="form-group">
                <label for="valorResistencia">Valor resistencia</label>
                <label for="lbValorResistencia" id="lbValorResistencia"></label>
            </div>
        </div>
        <div class="col col-lg-2">
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
    <!--Calculos-->
    <script>
        $('#btnCalcularProducto').click(function () {
            var valorCompra = $('#txtValorCompra').val()
            var porcentajeUtilidad = $('#txtPorcentajeUtilidad').val()
            var porcentajeImpuesto = $('#txtPorcentajeImpuesto').val()

            if (valorCompra && porcentajeUtilidad && porcentajeImpuesto) {
                var valorImpuesto = valorCompra * (porcentajeImpuesto / 100)
                var valorVenta = valorImpuesto + parseInt(valorCompra)
                $('#txtValorVenta').val(valorVenta)
            } else {

            }
        })
        function calcularResistencia(input) {
            debugger;

            var bgColors = new Array("black", "#583030", "red", "orange", "yellow", "green", "blue", "purple", "gray", "white", "gold", "silver");
            var fgColors = new Array("white", "white", "white", "black", "black", "white", "white", "white", "black", "black", "black", "black");

            //var slbanda1 = ($('#slbanda1').val() == '0') ? '' : $('#slbanda1').val()
            var slbanda1 = $('#slbanda1').val()
            var slbanda2 = $('#slbanda2').val()
            var slbanda3 = $('#slbanda3').val()
            var resistencia = slbanda1 + slbanda2

            for (var i = 0; i < slbanda3; i++) {
                resistencia += "0"
            }

            resistencia = addCommas(resistencia)

            resistencia += " \u2126 "
            $('#lbValorResistencia').text(resistencia)

            //$('#slbanda1').css('background', bgColors[(slbanda1 == '') ? 0 : parseInt(slbanda1)])
            //$('#slbanda1').css('color', fgColors[(slbanda1 == '') ? 0 : parseInt(slbanda1)])
            $('#slbanda1').css('background', bgColors[parseInt(slbanda1)])
            $('#slbanda1').css('color', fgColors[parseInt(slbanda1)])
            $('#slbanda2').css('background', bgColors[parseInt(slbanda2)])
            $('#slbanda2').css('color', fgColors[parseInt(slbanda2)])
            $('#slbanda3').css('background', bgColors[parseInt(slbanda3)])
            $('#slbanda3').css('color', fgColors[parseInt(slbanda3)])
            
        }

        function addCommas(x) {
            // This handy function found here:
            // http://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript
            return x.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
</body>