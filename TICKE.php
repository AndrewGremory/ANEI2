<?php
session_start();
require('fpdf/fpdf.php');
define('EURO',chr(128)); // Constante con el símbolo Euro.
$pdf = new FPDF('P','mm',array(76,60)); // Tamaño tickt 80mm x 150 mm (largo aprox)
$pdf->AddPage();

$conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
$resultado = mysqli_query($conexion," SELECT  *FROM asociados where nombre_usuario= '$_SESSION[nombre]'");
if($consulta = mysqli_fetch_array($resultado))
{ 
// CABECERA
$pdf->SetFont('Helvetica','',20);
$pdf->Cell(40,-6,'ANEI',0,1,'C');
$pdf->Ln(7);
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(40,4,'NOMBRE:'. $consulta['nombre_usuario'],0,1,'C');
$pdf->Cell(40,4,'CEDULA:'.$consulta['cedula_usuario'],0,1,'C');
$pdf->Cell(40,4,'MUNICIPIO:'.$consulta['municipio'],0,1,'C');

} 
// DATOS FACTURA        
$pdf->Ln(3);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(40,4,'TURNO',0,1,'C');
$pdf->Ln(8);
$pdf->SetFont('Helvetica', 'B', 45);
$pdf->Cell(40,4,$_SESSION['turno'],0,1,'C');

 
 
// PIE DE PAGINA
$pdf->Ln(10);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->Cell(40,0,'Fecha:'.' '.$_SESSION['fecha'],0,1,'C');
$pdf->Ln(3);
$pdf->Cell(40,0,'Hora'.' '.$_SESSION['hora'],0,1,'C');
 
$pdf->Output('ticket.pdf','i');
?>
