<?php
session_start();
include '../connect.php';
if(isset($_SESSION['logged_in']))
    $id=$_SESSION['id'];
    $did=$_GET['did'];
$result=mysqli_query($con,"SELECT `name`,`address`,`gender`,`email`,`phone` FROM `tbl_reg` where loginid=$id") or die(mysqli_error($con));
$result1=mysqli_query($con,"SELECT `charge`,`applydate`,`status` FROM `crimedetails` where detailid=$did") or die(mysqli_error($con));

include('../pdf_mc_table.php');
$pdf = new PDF_MC_TABLE();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);	
$pdf->Cell(176, 5, 'Application Details', 0, 0, 'C');
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Ln();	
$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
$pdf->SetFont('Arial','',12);	
$pdf->Cell(50,13,'Name : '. $row['name'],0,1);
$pdf->Cell(50,13,'Address : '. $row['address'],0,1);
$pdf->Cell(50,13,'Gender : '. $row['gender'],0,1);
$pdf->Cell(50,13,'Email : '. $row['email'],0,1);
$pdf->Cell(50,13,'Phone Number : '. $row['phone'],0,1);
$pdf->Cell(50,13,'Apply Date : '. $row1['applydate'],0,1);
$pdf->Cell(50,13,'Service Charge : '. $row1['charge'],0,1);
$pdf->Cell(50,13,'Status : '. $row1['status'],0,1);
$pdf->Output();
?>