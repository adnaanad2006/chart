<?php // content="text/plain; charset=utf-8"
// $Id
// Example of pie with center circle
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');

// Some data

$data = array();

$data[] = $ad = isset($_GET['ad']) ? intval($_GET['ad']) : 0;
$data[] = $ed = isset($_GET['ed']) ? intval($_GET['ed']) : 0;
$data[] = $md = isset($_GET['md']) ? intval($_GET['md']) : 0;
$data[] = $afd = isset($_GET['afd']) ? intval($_GET['afd']) : 0;
$data[] = $apd = isset($_GET['apd']) ? intval($_GET['apd']) : 0;


$color['ad'] = array(47, 124, 153);
$color['ed'] = array(250, 161, 25);
$color['md'] = array(6, 84, 103);
$color['afd'] = array(238, 26, 36);
$color['apd'] = array(255, 192, 12);

//$data = array(50,28,25,27,31,20);

// A new pie graph
$graph = new PieGraph(400,400,'auto');

$graph->SetScale('textlin');
$graph->graph_theme = null;
$graph->SetFrame(false);



// Setup title
//$graph->title->Set("Pie plot with center circle");
//$graph->title->SetFont(FF_ARIAL,FS_BOLD,14);
//$graph->title->SetMargin(8); // Add a little bit more margin from the top

// Create the pie plot
$p1 = new PiePlotC($data);




$color   = array($color['ad'],$color['ed'],$color['md'], $color['afd'], $color['apd']);
$p1->SetSliceColors($color);


// Set size of pie
$p1->SetSize(0.32);

// Label font and color setup
$p1->value->SetFont(FF_ARIAL,FS_NORMAL,10);
$p1->value->SetColor('white');

// Setup the title on the center circle
$p1->midtitle->Set("");
//$p1->midtitle->SetFont(FF_ARIAL,FS_NORMAL,10);

// Set color for mid circle
$p1->SetMidColor('white');


// Use percentage values in the legends values (This is also the default)
$p1->SetLabelType(PIE_VALUE_PER);

					

// The label array values may have printf() formatting in them. The argument to the
// form,at string will be the value of the slice (either the percetage or absolute
// depending on what was specified in the SetLabelType() above.
$lbl = array("America\n%.1f%%","Europe\n%.1f%%","Mena\n%.1f%%",
	     "Africa\n%.1f%%","Asia\n%.1f%%");
$p1->SetLabels($lbl);

// Explode all slices 15 pixels
$p1->ExplodeAll(5);



// Add plot to pie graph
$graph->Add($p1);

// .. and send the image on it's marry way to the browser
$graph->Stroke();

?>


