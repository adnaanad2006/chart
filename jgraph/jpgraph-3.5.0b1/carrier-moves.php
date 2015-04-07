<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

function callback1($tt){
	global $data1y;
	
	return $tt . '%';
}

function callback2($tt){
	global $data2y;
	
	return $tt . '%';
}

//='+sm5+'&='+u5+'&='+t5+'&='+sm4+'&='+u4+'&='+t4
$data1y = array();
$data2y = array();

$data1y[] = $sm5 = isset($_GET['sm5']) ? intval($_GET['sm5']) : 0;
$data1y[] = $u5 = isset($_GET['u5']) ? intval($_GET['u5']) : 0;
$data1y[] = $t5 = isset($_GET['t5']) ? intval($_GET['t5']) : 0;
$data2y[] = $sm4 = isset($_GET['sm4']) ? intval($_GET['sm4']) : 0;
$data2y[] = $u4 = isset($_GET['u4']) ? intval($_GET['u4']) : 0;
$data2y[] = $t4 = isset($_GET['t4']) ? intval($_GET['t4']) : 0;



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
$b1plot->SetFillColor(array('250', '161', '25'));
$b1plot->value->SetFormatCallback('callback1');
$b1plot->value->SetColor('white');
$b1plot->value->SetFont(FF_FONT1,FS_BOLD);
$b1plot->value->Show(true);
$b1plot->value->SetAngle(90);
$b1plot->SetValuePos('center');
  

//echo '<pre>';print_r( get_class_methods( $b1plot->value ) );echo '</pre>';die;

$b2plot = new BarPlot($data2y);
$b2plot->SetFillColor(array('238', '26', '36'));
$b2plot->value->SetFormatCallback('callback2');
$b2plot->value->SetColor('white');
$b2plot->value->SetFont(FF_FONT1,FS_BOLD);
$b2plot->value->Show(true);
$b2plot->value->SetAngle(90);
$b2plot->SetValuePos('center');

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

$graph->xaxis->SetTickLabels(array('SMART MOVE', 'UPWARD', 'TEMP ASSIGNMENT'));

//$graph->title->Set("Adjusting the width");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

//$graph->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();
?>
