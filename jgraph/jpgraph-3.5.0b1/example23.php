<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

setlocale (LC_ALL, 'et_EE.ISO-8859-1');

function callback1($tt){
	global $data1y;
	
	return $tt . '%';
}

function callback2($tt){
	global $data2y;
	
	return $tt . '%';
}


$data1y = array();
$data2y = array();

$data1y[] = $vm4 = isset($_GET['vm4']) ? floatval($_GET['vm4']) : 0;
$data1y[] = $vm5 = isset($_GET['vm5']) ? floatval($_GET['vm5']) : 0;
$data1y[] = $vcj4 = isset($_GET['vcj4']) ? floatval($_GET['vcj4']) : 0;
$data1y[] = $vcj5 = isset($_GET['vcj5']) ? floatval($_GET['vcj5']) : 0;
$data2y[] = $ivm4 = isset($_GET['ivm4']) ? floatval($_GET['ivm4']) : 0;
$data2y[] = $ivm5 = isset($_GET['ivm5']) ? floatval($_GET['ivm5']) : 0;
$data2y[] = $ivcj4 = isset($_GET['ivcj4']) ? floatval($_GET['ivcj4']) : 0;
$data2y[] = $ivcj5 = isset($_GET['ivcj5']) ? floatval($_GET['ivcj5']) : 0;


//$data1y=array(12,8,19,3,10,5);
//$data2y=array(8,2,11,7,14,4);

// Create the graph. These two calls are always required
$graph = new Graph(500,300);	
$graph->SetScale("textlin");
$graph->graph_theme = null;
$graph->SetFrame(false);

$graph->SetShadow();
$graph->img->SetMargin(40,30,20,40);

// Create the bar plots
$b1plot = new BarPlot($data1y);
$b1plot->SetFillColor(array('250', '161', '25'));
$b1plot->value->SetFormatCallback('callback1');
$b1plot->value->SetColor('white');
$b1plot->value->SetFont(FF_FONT1,FS_BOLD);
$b1plot->value->Show(true);
$b1plot->value->SetAngle(90);
$b1plot->SetValuePos('center');

$b2plot = new BarPlot($data2y);
$b2plot->SetFillColor(array('238', '26', '36'));
$b2plot->value->SetFormatCallback('callback2');
$b2plot->value->SetColor('white');
$b2plot->value->SetFont(FF_FONT1,FS_BOLD);
$b2plot->value->Show(true);
$b2plot->value->SetAngle(90);
$b2plot->SetValuePos('center');

//echo '<pre>';print_r( get_class_methods( $b2plot->value ));echo '</pre>';die;

// Create the grouped bar plot
$gbplot = new AccBarPlot(array($b1plot,$b2plot));

//echo '<pre>';print_r( get_class_methods( $gbplot ));echo '</pre>';die;

// ...and add it to the graPH
$graph->Add($gbplot);

//$graph->title->Set("Accumulated bar plots");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

//$graph->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);


$graph->xaxis->SetTickLabels(array('MEA Jan 2014', 'MEA Jan 2015', 'MCWW Jan 2014', 'MCWW Jan 2015'));

// Display the graph
$graph->Stroke();
?>
