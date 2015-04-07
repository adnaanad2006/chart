<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('jpgraph/jpgraph_pie3d.php');

//echo '<pre>';print_r($gDateLocale->GetShortMonth());echo '</pre>';die;
//echo '<pre>';print_r(array_keys($_GET));echo '</pre>';die;



$data = array();

$data[] = $HR = isset($_GET['HR']) ? intval($_GET['HR']) : 0;
$data[] = $LFI = isset($_GET['LFI']) ? intval($_GET['LFI']) : 0;
$data[] = $FINANCE = isset($_GET['FINANCE']) ? intval($_GET['FINANCE']) : 0;
$data[] = $OT = isset($_GET['OT']) ? intval($_GET['OT']) : 0;
$data[] = $GPS = isset($_GET['GPS']) ? intval($_GET['GPS']) : 0;
$data[] = $IMK = isset($_GET['IMK']) ? intval($_GET['IMK']) : 0;

//$data = array(40,60,21,33);

$graph = new PieGraph(500,300);
$graph->SetShadow();


//$graph->title->Set("A simple Pie plot");
//$graph->title->SetFont(FF_FONT1,FS_BOLD);

$p1 = new PiePlot3D($data);

//echo '<pre>';print_r(get_class_methods($p1));echo '</pre>';die;


$p1->SetSize(0.5);
$p1->SetCenter(0.40);

//$p1->SetLegends($gDateLocale->GetShortMonth());
$p1->SetLegends(array_keys($_GET));



$p1->SetAngle(30);



$graph->Add($p1);
$graph->Stroke();

?>


