<?php
if(!empty($_POST['submit']))
{
	$roll=$_POST['roll'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobileno'];
	$email=$_POST['emailadd'];
	$pass=$_POST['password'];
	$conpass=$_POST['conpassword'];
	$gender=$_POST['gender'];
	$dob=date('Y-m-d',strtotime($_POST['dob']));
	$la=implode(",",$_POST['lk']);
	$ad=$_POST['add'];
	
	require("fpdf/fpdf.php");
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","",10);
	$pdf->Cell(0,10,"Registration Details",0,1,'C');
	
	$pdf->Cell(32,10,"Roll No:",1,0);
	$pdf->Cell(70,10,$roll,1,1);
	$pdf->Cell(32,10,"Firstname:",1,0);
	$pdf->Cell(70,10,$firstname,1,1);
	$pdf->Cell(32,10,"Lastname:",1,0);
	$pdf->Cell(70,10,$lastname,1,1);
	$pdf->Cell(32,10,"Mobile No:",1,0);
	$pdf->Cell(70,10,$mobile,1,1);
	$pdf->Cell(32,10,"Email ID:",1,0);
	$pdf->Cell(70,10,$email,1,1);
	$pdf->Cell(32,10,"Password:",1,0);
	$pdf->Cell(70,10,$pass,1,1);
	$pdf->Cell(32,10,"Confirm Password:",1,0);
	$pdf->Cell(70,10,$conpass,1,1);
	$pdf->Cell(32,10,"Gender:",1,0);
	$pdf->Cell(70,10,$gender,1,1);
	$pdf->Cell(32,10,"DOB:",1,0);
	$pdf->Cell(70,10,$dob,1,1);
	$pdf->Cell(32,10,"Languages:",1,0);
	$pdf->Cell(70,10,$la,1,1);
	$pdf->Cell(32,10,"Address:",1,0);
	$pdf->Cell(70,10,$ad,1,0);
	
	$pdf->output();
}

?>