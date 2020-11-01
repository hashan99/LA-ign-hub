<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Members Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 11);

// add a page
$pdf->AddPage();

$heading = <<< EOD

<h3> List of Registered Members </h3>

EOD;

$pdf-> writeHTMLCell(0, 0, '', '', $heading, 0, 1, 0, true, 'C', true);
$pdf-> Ln(8);
$table = '<table style = "padding:8px; border:1px solid black">';
$table .= '<tr style = "background-color: #80e5ff">
			<th style = "border:1px solid black">Member_ID</th>
			<th style = "border:1px solid black">First_Name</th>
			<th style = "border:1px solid black">Last_Name</th>
			<th style = "border:1px solid black">IGN</th>
			<th style = "border:1px solid black">Contact_Number</th>
			<th style = "border:1px solid black">Primary_Game</th>
		   </tr>';

foreach($member_details as $record)
{
	$table .= '<tr>
				<td style = "border:1px solid black">'.$record-> Member_ID.'</td>
				<td style = "border:1px solid black">'.$record-> First_Name.'</td>
				<td style = "border:1px solid black">'.$record-> Last_Name.'</td>
				<td style = "border:1px solid black">'.$record-> IGN.'</td>
				<td style = "border:1px solid black">'.$record-> Contact_Number.'</td>
				<td style = "border:1px solid black">'.$record-> Primary_Game.'</td>
			   </tr>';	
}

$table .= '</table>';

$pdf-> writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);

// set cell padding
//$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
//$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
//$pdf->SetFillColor(255, 255, 127);

// move pointer to last page
//$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('example_005.pdf', 'I');
end_ob_clean();

//============================================================+
// END OF FILE
//============================================================+