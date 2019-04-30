<?php

require_once '../core/lib/fpdf/fpdf.php';

include "../core/livraisonC.php";
$livraisonC=new livraisonC();
$listelivraison=$livraisonC->afficherlivraisons();
/**
 *  
 */
class myPDF extends FPDF
{
	
	function header()
	{    
		//$this->Image('images/eye.jpg',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'KARMA',0,0,'C');
		$this->Ln(20);
		$this->SetFont('Times','',12);

		$this->Text(8,60,'Liste des livraisons:');
		//$this->Text(8,65,'Date :'.date("d-m-Y"));
		//$this->Text(8,70,'Mode de reglement : check');
		$this->Text(230,60,'Lamia Marzouki');
		$this->Text(230,65,'24 rue de la culture citee RTT 2 ben younes , Tunis');
		$this->Text(230,70,'2078 la Manouba');
		$this->Ln(50);


	}
	function footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','',0);
		$this->Cell(196,5,' TEL:+21620258260' ,0,0,'C');
				$this->LN();

		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

	}
	function headerTable(){

		
		$this->SetFont('Arial','B',12);
		$this->Cell(30,20,'identifiant',1,0,'C');
		$this->Cell(30,20,'produit	',1,0,'C');
		$this->Cell(30,20,'quantite',1,0,'C'); 
		$this->Cell(30,20,'adresse	',1,0,'C');
		
	
		$this->LN();



	}
	function viewTable($listelivraison)
	{
		$this->SetFont('times','',12);
			foreach($listelivraison as $livraison):

		$this->Cell(30,20,  $livraison['identifiant'] ,1,0,'C');
	 	$this->Cell(30,20, $livraison['produit'],1,0,'L');
	 	$this->Cell(30,20,  $livraison['quantite'],1,0,'L');
	 	$this->Cell(30,20, $livraison['adresse'],1,0,'L');
	 	
	 	
	 	
		
		$this->LN();

			endforeach; 
		$this->LN();

	}
	

}

$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($listelivraison);
$pdf->Output();

?>