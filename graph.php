<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(350,280);
$data = array("Day1"=>0.5, "Day2"=>0, "Day3"=>0.5, "Day4"=>0,
"Day5"=>0.5, "Day6"=>0, "Day7"=>1 ,"Day8"=>0, "Day9"=>2.5);
//$graph->setBackgroundColor("black");
$graph->addData($data);
$graph->setBarColor('255,255,204');
$graph->setTitle('Workout Summary');
$graph->setTitleColor('black');
$graph->setupYAxis(15, 'black');
$graph->setupXAxis(20, 'black');
$graph->setGrid(false);
$graph->setGradient('blue', 'white');
$graph->setBarOutlineColor('white');
$graph->setTextColor('black');
$graph->setDataPoints(true);
$graph->setDataPointColor('red');
$graph->setLine(true);
$graph->setLineColor('red');
$graph->createGraph();
?>
