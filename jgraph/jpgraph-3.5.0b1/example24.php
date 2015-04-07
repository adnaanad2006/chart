<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');


// ua+sa+ni+eg+ke+qa+mo+ksa+pak+jrdn+lebn
$data1y=array(intval($_GET['ua']));
$data2y=array(intval($_GET['sa']));
$data3y=array(intval($_GET['ni']));
$data4y=array(intval($_GET['eg']));
$data5y=array(intval($_GET['ke']));
$data6y=array(intval($_GET['qa']));
$data7y=array(intval($_GET['mo']));
$data8y=array(intval($_GET['ksa']));
$data9y=array(intval($_GET['pak']));
$data10y=array(intval($_GET['jrdn']));
$data11y=array(intval($_GET['lebn']));

// Create the graph. These two calls are always required
$graph = new Graph(400,400);	
$graph->SetScale("textlin");



$graph->Set90AndMargin(0,0,0,0);
$graph->yaxis->Hide();
$graph->xaxis->Hide();



$graph->SetShadow();
$graph->img->SetMargin(40,30,20,40);

$b1plot = new BarPlot($data1y);
$b1plot->SetFillColor(array(1, 2, 50));

$b2plot = new BarPlot($data2y);
$b2plot->SetFillColor("blue");
$b3plot = new BarPlot($data3y);
$b3plot->SetFillColor("green");
$b4plot = new BarPlot($data4y);
$b4plot->SetFillColor("brown");



$b5plot = new BarPlot($data5y);
$b6plot = new BarPlot($data6y);
$b7plot = new BarPlot($data7y);
$b8plot = new BarPlot($data8y);
$b9plot = new BarPlot($data9y);
$b10plot = new BarPlot($data10y);
$b11plot = new BarPlot($data11y);
/*  */
// Create the accumulated bar plots
$ab1plot = new AccBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot,$b5plot,$b6plot,$b7plot,$b8plot,$b9plot,$b10plot,$b11plot));
//$ab2plot = new AccBarPlot(array($b3plot,$b4plot));

// Create the grouped bar plot
//$gbplot = new GroupBarPlot(array($ab1plot,$ab2plot));
$gbplot = new GroupBarPlot(array($ab1plot));

// ...and add it to the graph
$graph->Add($gbplot);

//$graph->title->Set("Grouped Accumulated bar plots");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

//$graph->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
//$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();
?>
