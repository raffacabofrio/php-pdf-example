<?
  require('../vendor/autoload.php');
  
  // $obj = new raffaClasses\my_class();
  // $obj->hello();

  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',16);
  $pdf->Cell(40,10,'Hello World!');
  $pdf->Output();
?>