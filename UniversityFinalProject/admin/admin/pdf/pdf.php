<?php
require 'fpdf.php';
$i=1;
$db = new PDO('mysql:host=localhost;dbname=speed&accident','root','');
/**
 *
 */
class myPDF extends FPDF
{

  function header()
  {
  //  $this->image('logo.jpg',10,6);
  $this->Image('../img/logo.png',10,6);
    $this->SetFont('Arial','B',14);
    $this->Cell(276,5,'Weekly Report',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    $this->Cell(276,10,'Over speed Vioaltion And Accident report',0,0,'C');
    $this->Ln(20);
  }

function footer(){
  $this->SetY(-15);
  $this->SetFont('Arial','',8);
  $this->Cell(0,10,'page' .$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable1(){

    $this->SetFont('Times','B',10);
    $this->Cell(276,10,'Over speed Vioaltion ',0,0,'C');
    $this->Ln();

  $this->SetFont('Times','B',12);
  $this->Cell(40,10,'NAME',1,0,'C');
  $this->Cell(60,10,'Time',1,0,'C');
  $this->Cell(60,10,'charges',1,0,'C');
  $this->Cell(50,10,'speed',1,0,'C');
  $this->Cell(30,10,'status',1,0,'C');
  $this->Ln();
}


function headerTable2(){

    $this->SetFont('Times','B',10);
    $this->Cell(276,10,'Accident reported',0,0,'C');
    $this->Ln();

  $this->SetFont('Times','B',12);
  $this->Cell(60,10,'Accident location',1,0,'C');
  $this->Cell(60,10,'Victim phone',1,0,'C');
  $this->Cell(60,10,'Accident Time',1,0,'C');
  $this->Cell(30,10,'Hospital',1,0,'C');
  $this->Cell(30,10,'Police station',1,0,'C');
  $this->Ln();
}

function viewTable1($db){


  $this->SetFont('Times','',12);
  $stmt = $db->query('SELECT * FROM violation WHERE speed >= 5 AND speed IN( SELECT DISTINCT(speed) FROM violation GROUP BY speed ) GROUP BY speed');
  while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {

    $this->Cell(40,10,$data->v_name,1,0,'L');
    $this->Cell(60,10,$data->v_time,1,0,'L');
    $this->Cell(60,10,$data->v_charges,1,0,'L');
    $this->Cell(50,10,$data->speed,1,0,'L');
    $this->Cell(30,10,$data->v_status,1,0,'L');
    $this->Ln();
  }
}

  function viewTable2($db){


    $this->SetFont('Times','',12);
    $stmt2 = $db->query('SELECT * FROM accident');
    while ($data = $stmt2->fetch(PDO::FETCH_OBJ)) {


      $this->Cell(60,10,$data->a_long_lati,1,0,'L');
      $this->Cell(60,10,$data->phone,1,0,'L');
      $this->Cell(60,10,$data->a_time,1,0,'L');
      $this->Cell(30,10,$data->h_id,1,0,'L');
      $this->Cell(30,10,$data->p_id,1,0,'L');
      $this->Ln();



      // code...
    }

    $this->Ln();
    $this->Ln();
    $this->Ln();
}


}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('R','A4',0);
$pdf->headerTable1();
$pdf->viewTable1($db);
$pdf->headerTable2();
$pdf->viewTable2($db);
$pdf->Output();




 ?>
