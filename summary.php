
<?php
session_start();
include_once 'dbconnect.php';
include 'phpgraphlib.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

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
$graph->setGradient('purple', 'white');
$graph->setBarOutlineColor('white');
$graph->setTextColor('black');
$graph->setDataPoints(true);
$graph->setDataPointColor('red');
$graph->setLine(true);
$graph->setLineColor('red');
$graph->createGraph();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <title>CSS Registration Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/navheader.css"/>
</head>
<header id="header">
				<h1><a href="index.html">Fantastic Training</a></h1>
					
				Hello, <?php echo $userRow['username']; ?>&nbsp;
				<a href="#nav">Menu</a>
				
				
</header>

<nav id="nav">
				<ul class="links">
					<li><a href="logout.php?logout">Sign Out</a></li>
					<li><a href="home.php">Home</a></li>
					<li><a href="viewProfile.php">My Profile</a></li>
					<li><a href="uoa.php">Manage your calendar</a></li>
					<li><a href="home.php">Check Workout Summary</a></li>
					
				</ul>
</nav>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>
</html>


