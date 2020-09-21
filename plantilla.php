<?php
require 'fpdf/fpdf.php';
class PDF extends FPDF
{
	function Header()
	{
		$this->Image('images/tec2.png',4,0.5,22);
		$this->Image('images/tec.png',185,4,22);
		$this->SetFont('Arial','B',10);
		$this->Cell(30);
		$this->Cell(120,15, 'TECNOLOGICO DE ESTUDIOS SUPERIORES DE SAN FELIFE DEL PROGRESO',0,0,'C');
		$this->Cell(-110,35, 'Reporte Semanal',0,1,'C');
		$this->Cell(190,-20, 'Division Area Informatica',0,0,'C');
		$this->Cell(-190,-1, 'Jefa de Division: Selene Mireya Martinez Navarrete',0,0,'C');
		$this->Cell(190,190, 'Nombre y Firma',0,0,'C');
		$this->Cell(-190,170, '____________________________________________',0,0,'C');
		$this->Ln(20);


	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Image('images/tec.png',92,250,22);

		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
	}
}
?>