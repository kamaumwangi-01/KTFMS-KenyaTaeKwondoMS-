<?php
require('fpdf181/fpdf.php');
include 'core/init.php';
$phase=$_SESSION['phase'];
class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial', 'B',15);
		
		
		$this->Image('Images/logo.jpg',10,25,25);
		$this->Ln(5);
		$this->SetFont('Arial', 'B',12);
		$this->Cell(90,5,'',0,0);
		$this->Cell(55,5,'KENYA TAEKWONDO FEDERATION (KTF)',0,0);
		$this->Cell(70,5,'',0,1);
		
		$this->Cell(65,10,'',0,0);
		$this->Cell(71,10,'Headquarters: Kenya national Sports Council Offices- Msa Road',0,0);
		$this->Cell(0,10,'',0,1);
		
		$this->Cell(100,10,'',0,0);
		$this->Cell(50,10,' P. O Box 61002-00200, Nairobi.',0,0);
		$this->Cell(0,10,'',0,1);
		
		$this->Cell(120,10,'',0,0);
		$this->Cell(50,10,'Tel: 074498539',0,0);
		$this->Cell(0,10,'',0,1);
		
		$this->Cell(125,10,'',0,0);
		$this->Cell(50,10,'NAIROBI',0,0);
		$this->Cell(0,10,'',0,1);

		$this->Cell(199,1,'',1,1);
		//----------------------------------------------get name
		     
		
		date_default_timezone_set('Africa/Nairobi');
	    $now = new DateTime();
	    $time = $now->format('H:i:s');
	    $date = $now->format('d-m-Y');
		$wad=$_GET['c'];

        $this->Ln(5);
		$this->SetFont('Arial','B',11);
		$this->Cell(5,5,'',0,0);
		$this->Cell(100,5,'Registered Club/Institution as at '.$date,0,0);
		$this->Cell(40,5,'',0,1);
		$this->Cell(5,2,'',0,0);
		$this->Cell(100,2,'',0,0);
		$this->Cell(40,2,'',0,1);
		
		$this->SetFont('Arial','B',11);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(50,50,100);
		 
		 $this->Cell(10,5,'No.',1,0,'',true);
		 $this->Cell(40,5,'Club Name.',1,0,'',true);
		$this->Cell(40,5,'County Located',1,0,'',true);
		
		$this->Cell(55,5,'Coach Name',1,0,'',true);
		
		$this->Cell(40,5,'Date Registered',1,1,'',true);
		
		
		
		
		
	}
	function Footer(){
		//Go to 1.5cm from bottom
		$this->SetY(-15);
		
		$this->SetFont('Arial','',8);
		
		$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,1,'C');
		$this->Cell(0,5,'Software by: @samSoft(0726159307)',0,0,'R');
		

		
	}
}
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages('{pages}');

$pdf->AddPage();

$pdf->SetFont('Arial','',11);			 
$sum=0;
$no=0;			 
 $sql="SELECT club_id,club_name,county,coach,date_registered FROM club";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
       if(!$result){
	    }
	while($row=mysqli_fetch_array($result))
                   {    
                   	   $idn=$row['club_id'];
			            $name=$row['club_name'];
						$county=$row['county'];
	                    $coach=$row['coach'];
						$date_registered=$row['date_registered'];
						$no=$no+1;

     $pdf->Cell(10,5,$no,1,0);           
	 $pdf->Cell(40,5,$name,1,0);
	 $pdf->Cell(40,5,$county,1,0);
	 
	 $pdf->Cell(55,5,$coach,1,0);
	 
	 $pdf->Cell(40,5,$date_registered,1,1);
	 
	 
	 
	 
 }
     $pdf->Cell(25,5,'',0,1);
     $pdf->Cell(25,5,'Total Clubs',0,0);
	 $pdf->Cell(25,5,$no,0,1);
    



$pdf->Output();

?>