<?php

use setasign\Fpdi\Fpdi;
// use setasign\Fpdi\PdfReader;





    
    $s_name = "zubayr Devloper";
    $photo = "me.jpg";


   

    $fca = 35;
    $sca = 45;
    $tca = 11;
    $exam = 45;

    $total = ($fca + $sca + $tca + $exam);


    //Score grading

    if($total <= 39) {
        $grade = "F9";

    }

    elseif ($total >= 40 ) {
        $grade = "E8";

    }

    elseif($total >= 45) {
        $grade = "D7";

    }

    elseif($total >= 50) {
        $grade = "C6";

    }

    


    require('lib/do/fpdf/fpdf.php');
    //require('lib/do/FPDI2/src/autoload.php');

    $textColour = array(0, 0, 0);
    $headerColour = array(100, 100, 100);
    $tableHeaderTopTextColour = array(255, 255, 255);
    $tableHeaderTopFillColour = array(125, 152, 179);
    $tableHeaderTopProductTextColour = array(0, 0, 0);
    $tableHeaderTopProductFillColour = array(143, 173, 204);
    $tableHeaderLeftTextColour = array(99, 42, 57);
    $tableHeaderLeftFillColour = array(184, 207, 229);
    $tableBorderColour = array(50, 50, 50);
    $tableRowFillColour = array(213, 170, 170);
    $reportName = "2009 Widget Sales Report";
    $reportNameYPos = 160;
    $logoFile =  $photo;
    $logoXPos = 170;
    $logoYPos = 5;
    $logoWidth = 30;

    $logoFile2 = base_url('static/website/site-logo/logo.png');
    $logoXPos2 = 80;
    $logoYPos2 = 23;
    $logoWidth2 = 30;


    $columnLabels = array("Q1", "Q2", "Q3", "Q4");
    $rowLabels = array("SupaWidget", "WonderWidget", "MegaWidget", "HyperWidget");
    $chartXPos = 20;
    $chartYPos = 250;
    $chartWidth = 160;
    $chartHeight = 80;
    $chartXLabel = "Product";
    $chartYLabel = "2009 Sales";
    $chartYStep = 20000;

    $chartColours = array(
        array(255, 100, 100),
        array(100, 255, 100),
        array(100, 100, 255),
        array(255, 255, 100),
    );

    $data = array(
        array(9940, 10100, 9490, 11730),
        array(19310, 21140, 20560, 22590),
        array(25110, 26260, 25210, 28370),
        array(27650, 24550, 30040, 31980),
    );




// End configuration



    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->SetTextColor($textColour[0], $textColour[1], $textColour[2]);

    $pdf->AddPage();

    $pdf->AliasNbPages();


// Logo
    $pdf->Image($logoFile2, $logoXPos2, $logoYPos2, $logoWidth2);
    $pdf->Ln(30);
    $pdf->SetFont("Arial", "B", 15);
    $pdf->SetTextColor(0, 0, 225);
    $pdf->Cell(0, 5,  "{$site_info->set_site_name} ", 0, 2, "C");

    $pdf->SetFont("Times", "B", 13);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->SetFont("Times", "I", 13);
    $pdf->Cell(0, 5, "{$site_info->set_site_short_description} ", 0, 2, "C");
    $pdf->Ln(2);



    //$pdf->Image($logoFile, $logoXPos, $logoYPos, $logoWidth);


//    $pdf->Cell(0, 10, "Name Of Student:  ", 0, 0, "L");

    $pdf->SetFont("Arial", "B", 14);
    $pdf->SetTitle("Item Licence");

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(30, 10,"Item Name:", 0, 0);

    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(20, 10,"{$lies->item_name}", 0, 1);

    $pdf->Ln(3);

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(35, 10,"Item Author:", 0, 0);

    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(20, 10,"{$lies->user_firstname} {$lies->user_lastname} ({$lies->user_username})", 0, 1);

    $pdf->Ln(3);

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(35, 10,"Item Sold By:", 0, 0);

    $pdf->SetTextColor(0,0,255);
    $pdf->Cell(20, 10,"{$site_info->set_site_name}", 0, 1);

    $pdf->Ln(3);

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(50, 10,"Item Purchase By:", 0, 0);

    $pdf->SetTextColor(0,0,255);
    $pdf->Cell(20, 10,"{$mine->user_firstname} {$mine->user_lastname} ({$mine->user_username})", 0, 1);

    $pdf->Ln(3);

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(35, 10,"Liecense:", 0, 0);

    $pdf->SetTextColor(255,0,255);
    $pdf->Cell(20, 10,"Regular Liecense", 0, 1);

    $pdf->Ln(3);

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(45, 10,"Purchase Code:", 0, 0);

    $pdf->SetTextColor(25,165,0);
    $pdf->SetFont("Arial", "B", 9);
    $pdf->Cell(20, 10,"{$lies->ss_code}", 0, 1);

    $pdf->Ln(3);

    $pdf->SetFont("Arial", "B", 14);
    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(45, 10,"Purchase Date:", 0, 0);

    $pdf->SetTextColor(255,165,0);
    $date = Carbon\Carbon::parse($lies->td_created_at)->format('d, F Y');
    $pdf->Cell(20, 10,"{$date}", 0, 1);

    $pdf->Ln(5);

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(195, 10,"Notes:", 0, 0, 'C');

    

    $pdf->Ln(10);

    //Subject Section Goes here..
    $pdf->SetFont("Arial", "", 14);
    $pdf->SetTextColor(0,0,0);
    // $pdf->SetDrawColor(255,0,0);

    $link = $pdf->AddLink("http://asmple.com");

    $pdf->Write(5,"Regular Liecense can not be Redistribute or Resale without the permission of the Author. If you have any quetion please vist our contact page \n\n");
    $pdf->Ln();






    $pdf->Output();



?>