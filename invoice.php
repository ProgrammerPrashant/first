<?php

require('pdff/fpdf.php');

$pdf = new FPDF('p','mm','A4');
$abc = 1;
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);

//$pdf->Cell(170, 15,'TAX INVOICE',0,0,"C");
$pdf->SetFont('Arial','B',8);
$pdf->Cell(192, 6,'Mob: 7666292622',0,1,"R");
$pdf->Cell(196, 1,'Office: 022-12345678',0,1,"R");
$pdf->Cell(196, 6,'E-mail: p.mishra97731@gmail.com',0,1,"R");
$pdf->SetFont('times','B',30);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(190, 15,'Neethu Engineering Works',0,1,"C");
$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',9);
$pdf->SetDrawColor(255,0,0);

$pdf->Cell(190, 6,'Add: Vishalgadh Society near ram mandir ram nagar B ghatkopar West Mumbai no. 400086',1,1,"C");
$pdf->Cell(90, 10,'Ref. No.:',0,0,"L");
$pdf->Cell(92, 10,'Date:',0,0,"R");
// bordered way




$pdf->Output();

?>

