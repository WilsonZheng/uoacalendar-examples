<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(350,280);
$data = array("Day1"=>4, "Day2"=>2, "Day3"=>5, "Day4"=>7,
"Day5"=>1, "Day6"=>5, "Day7"=>2);
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
