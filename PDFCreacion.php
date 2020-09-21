<?php
include 'plantilla.php';
require 'conexion2.php';
$descripcion=$_POST['actividad_planeada'];
$cantidad_realizada=$_POST['unidad_medida_programada'];
$id_numactividad=$_GET['id_numactividad'];
 $sql2 = "INSERT INTO reportes (descripcion, cantidad_realizada, observacion,fecha_realizada) VALUES ('$descripcion', '$cantidad_realizada', '$observacion', '$fecha_realizada')";

	$resultado2 = $mysqli->query($sql2);
$query="SELECT *FROM actividadades_semanal WHERE id_numactividad='$id_numactividad'";
$resultado=$mysqli->query($query);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->setFillColor(232,232,232);
$pdf->setfont('Arial', 'B', 12);
$pdf->Cell(30,2,'ID Actividad',2,0,'C',1);
$pdf->Cell(40,2,'Actividad Planeada',2,0,'C',1);
$pdf->Cell(60,2,'Unidad Medida Planeada',2,0,'C',1);
$pdf->Cell(25,2,'Cantidad',2,0,'C',1);
$pdf->Cell(40,2,'Id Actividad Mensual',2,1,'C',1);
$pdf->SetFont('Arial','',10);
while($row = $resultado->fetch_assoc())
	{
	$pdf->Cell(30,6,utf8_decode($row['id_numactividad']),1,0,'C');
		$pdf->Cell(40,6,$row['actividad_planeada'],1,0,'C');
		$pdf->Cell(60,6,$row['unidad_medida_programada'],1,0,'C');
		$pdf->Cell(25,6,$row['cantidad_planeada'],1,0,'C');
	$pdf->Cell(40,6,utf8_decode($row['id_actividad_mensual']),1,1,'C');
	}
$pdf->Output();
?>