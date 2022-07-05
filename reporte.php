<?php
require('conexion.php');
require('fpdf/fpdf.php');

$sql = "SELECT titulo_trabajo, opcion_trabajo, autor, curso, especialidad from davidP WHERE titulo_trabajo != '' limit 4 ";
$Resultado = $link->query($sql);

$pdf = new FPDF('P','mm','letter');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(190,5,'REPORTE',0,1,'C');
$pdf->Image ("img/salud.png",10, 3,13,);

$pdf->Ln(2);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(40,5,'Titulo trabajo',1,0,'C');
$pdf->Cell(50,5,'Opcion de trabajo',1,0,'C');
$pdf->Cell(35,5,'Autor',1,0,'C');
$pdf->Cell(30,5,'Curso',1,0,'C');
$pdf->Cell(40,5,'Especialidad',1,1,'C');

$pdf->SetFont('Arial','',9);

while($fila = $Resultado->fetch_assoc()){
    
    $pdf->Cell(40,5,$fila['titulo_trabajo'],1,0,'C');
    $pdf->Cell(50,5,$fila['opcion_trabajo'],1,0,'C');
    $pdf->Cell(35,5,$fila['autor'],1,0,'C');
    $pdf->Cell(30,5,$fila['curso'],1,0,'C');
    $pdf->Cell(40,5,$fila['especialidad'],1,1,'C');
}

$pdf->Output();
?>