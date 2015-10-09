<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample Workouts for Beginners</title>
<link rel="stylesheet" href="assets/css/main.css" />

</head>
<body >
			<header id="header">
				<h1><a href="index.html">Fantastic Training</a></h1>

				Hello, <?php echo $userRow['username']; ?>&nbsp;
				<a href="#nav">Menu</a>
				
				
			</header>
			
			
			<nav id="nav">
				<ul class="links">
					<li><a href="logout.php?logout">Sign Out</a></li>
					<li><a href="home.php">Home</a></li>
					<li><a href="Profile.php">My Profile</a></li>
					<li><a href="uoa.php">Manage your calendar</a></li>
					<li><a href="home.php">Check Workout Summary</a></li>
					
				</ul>
			</nav>
			
			
			
			
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Sample Workouts for Beginners</h2>
						
					</header>
					
					<p><span class="image left"><img src="images/p1.jpg" alt="" /></span>Before beginning any fitness routine, it's important to warm up, then do some light stretching. Save the bulk of the stretching for after the workout.</p>
					<p>Once you're warmed up, experts recommend three different types of exercise for overall physical fitness: cardiovascular activity, strength conditioning, and flexibility training. These don't all have to be done at once, but doing each on a regular basis will result in balanced fitness.</p>
					
					
					<tr>
					<li><ul><b>Cardiovascular activity.</b> Start by doing an aerobic activity, like walking or running, for a sustained 20-30 minutes, four to five times a week, says Bryant. To ensure you're working at an optimum level, try the "talk test": Make sure you can carry on a basic level of conversation without being too winded. But if you can easily sing a song, you're not working hard enough.</ul></li>
					<li><ul><b>Strength conditioning.</b> Start by doing one set of exercises targeting each of the major muscle groups. Bryant suggests using a weight at which you can comfortably perform the exercise eight to 12 times in a set. When you think you can handle more, gradually increase either the weight, the number of repetitions, or number of sets. To maximize the benefits, do strength training at least twice a week. Never work the same body part two days in a row.</li></ul>
					
					<li><ul><b>Flexibility training. </b>The American College on Exercise recommends doing slow, sustained static stretches three to seven days per week. Each stretch should last 10-30 seconds.</ul></li>
					<li><ul><b>Warm up.</b> This is the act of preparing your body for the stress of exercise. The body can be warmed up with light intensity aerobic movements like walking slowly. These movements increase blood flow, which in turn heats up muscles and joints. "Think of it as a lube job for the body," Bryant explains. At the end of your warm-up, it's a good idea to do a little light stretching.</ul></li>
					</tr>
					<p>To learn how to perform certain exercises, consider hiring a personal trainer for a session or two, or take advantage of free sessions offered when you join a gym.</p>
					
				
				</div>
			</section>
			





			
</body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>


</html>