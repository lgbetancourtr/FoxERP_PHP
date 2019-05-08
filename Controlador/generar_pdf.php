<?php
require('../config.php');
require('C:\AppServ\www\fpdf\fpdf.php');
date_default_timezone_set("America/Bogota");

$pdf=new FPDF();

$pdf->SetAutoPageBreak(false);

$pdf->AddPage();

$y_axis = 5;

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY($y_axis_initial);
$pdf->SetX(25);
$pdf->Cell(30,6,'CODIGO',1,0,'L',1);
$pdf->Cell(100,6,'NOMBRE',1,0,'L',1);
$pdf->Cell(30,6,'PRECIO',1,0,'R',1);

$y_axis = $y_axis + $row_height;

$query= "SELECT codigo_producto,nombre_producto,precio_compra FROM tabla05";

$result = mysqli_query($con,$query) or die(mysql_error());

$i = 0;

$max = 25;

$row_height = 6;

while($row = mysqli_fetch_array($result))
{   
    
    if ($i == $max)
    {
        $pdf->AddPage();
        
        $pdf->SetY($y_axis_initial);
        $pdf->SetX(25);
        $pdf->Cell(30,6,'CODIGO',1,0,'L',1);
        $pdf->Cell(100,6,'NOMBRE',1,0,'L',1);
        $pdf->Cell(30,6,'PRECIO',1,0,'R',1);

        $y_axis = $y_axis + $row_height;

        $i = 0;
    }

    $code = $row['codigo_producto'];
    $price = $row['precio_compra'];
    $name = $row['nombre_producto'];

    $pdf->SetY($y_axis);
    $pdf->SetX(25);
    $pdf->Cell(30,6,$code,1,0,'L',1);
    $pdf->Cell(100,6,$name,1,0,'L',1);
    $pdf->Cell(30,6,$price,1,0,'R',1);
   
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
}

mysqli_close($con);

//Send file
$pdf->Output();

?>