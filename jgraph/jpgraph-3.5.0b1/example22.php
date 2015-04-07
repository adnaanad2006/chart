<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

function callback1($tt){
	global $data1y;
	
	return number_format($tt / array_sum($data1y) * 100, 2) . '%';
}

function callback2($tt){
	global $data2y;
	
	return number_format($tt / array_sum($data2y) * 100, 2) . '%';
}

//fny='+fny+'&mny='++'&bny='++'&fly='++'&mly='++'&bly='+

// Some data

$data1y = array();
$data2y = array();

$data1y[] = $fny = isset($_GET['fny']) ? intval($_GET['fny']) : 0;
$data1y[] = $mny = isset($_GET['mny']) ? intval($_GET['mny']) : 0;
$data1y[] = $bny = isset($_GET['bny']) ? intval($_GET['bny']) : 0;
$data2y[] = $fly = isset($_GET['fly']) ? intval($_GET['fly']) : 0;
$data2y[] = $mly = isset($_GET['mly']) ? intval($_GET['mly']) : 0;
$data2y[] = $bly = isset($_GET['bly']) ? intval($_GET['bly']) : 0;



//$data1y=array(12,8,19);
//$data2y=array(8,2,11);

// Create the graph. These two calls are always required
$graph = new Graph(600,300);	
$graph->SetScale("textlin");
$graph->graph_theme = null;
$graph->SetFrame(false);
$graph->SetShadow();





$graph->img->SetMargin(40,30,20,40);

// Create the bar plots
$b1plot = new BarPlot($data1y);
$b1plot->SetFillColor(array('238', '26', '36'));
//$b2plot->value->SetFormat('%d');
$b1plot->value->SetFormatCallback('callback1');
$b1plot->value->Show(true);

//$b1plot->value->SetColor("black","darkred"); 
$b1plot->value->SetFormat('%01.2f');  

//echo '<pre>';print_r( get_class_methods( $b1plot->value ) );echo '</pre>';die;

$b2plot = new BarPlot($data2y);
$b2plot->SetFillColor(array('250', '161', '25'));
//$b2plot->value->SetFormat('%d');
$b2plot->value->SetFormatCallback('callback2');
$b2plot->value->Show(true);

//$b2plot->value->SetColor("black","darkred"); 
$b2plot->value->SetFormat('%01.2f');

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
$gbplot->SetWidth(0.5);

// ...and add it to the graPH
$graph->Add($gbplot);



// Setup X-axis labels
$a = $gDateLocale->GetShortMonth();


//echo '<pre>';print_r( get_class_methods( $b1plot->value ) );echo '</pre>';die;

$graph->xaxis->SetTickLabels(array('Front', 'Middle', 'Back'));

//$graph->title->Set("Adjusting the width");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

//$graph->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();
?>
