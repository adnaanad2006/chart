<?php

if(!isset($_GET['f'])){
//$html = file_get_contents('pdf_template.html');

ob_start();
include ('pdf_template.php');

$html = ob_get_contents();

ob_clean();




//==============================================================
//==============================================================
//==============================================================
include("mpdf60/mpdf.php");
$mpdf=new mPDF('c',array(250,2000), 0, '', 0, 0, 0, 0, 0, 0); 

//echo '<pre>';print_r(get_class_methods($mpdf));echo '</pre>';die;

$mpdf->mirrorMargins = false;

$mpdf->SetDisplayMode('fullpage');
$mpdf->SetMargins(0, 0, 0);
$mpdf->SetLeftMargin(0);
$mpdf->SetRightMargin(0);
$mpdf->use_kwt = true;

$mpdf->WriteHTML($html);

//$mpdf->Output();
//exit;
############# download #####

$name = time().'.pdf';
$filename = 'pdf/'.$name;

$mpdf->Output($filename, 'F');

echo $name;

die;
} else if(isset($_GET['f'])) {
header("Content-disposition: attachment; filename={$_GET['f']}");
header("Content-type: application/pdf");
readfile("pdf/{$_GET['f']}");

exit;
}
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================


?>