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
<title>Beginner's Guide for Exercising</title>
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
						<h2>Beginner's Guide to Exercise</h2>
						
					</header>
					<h4>Get Ready</h4>
					
					<p><span class="image left"><img src="images/101.png" alt="" /></span>The first step to any workout routine is to evaluate how fit you are for your chosen physical activity. Whenever you begin an exercise program, it's wise to consult a doctor. Anyone with major health risks, males aged 45 and older, and women aged 55 and older should get medical clearance, says Cedric Bryant, PhD, chief exercise physiologist for the American Council on Exercise.</p>
					<p> But no matter what your medical condition, you can usually work out in some way.</p>
					<p>After assessing your fitness, it helps to set workout goals. For example, do you want to prepare to run a 5K? Hit the gym five times a week? Or just walk around the block without getting winded?</p>
					<p>Whatever your goals and medical condition, approach any new exercise regimen with caution.</p>
					
					<h4>Fitness Definitions</h4>
					<p>Even long-term exercisers may have misconceptions about exactly what some fitness terms mean. Here are some definition of words and phrases you're likely to encounter:</p>
					<tr>
					<li><ul><b>Aerobic/cardiovascular activity.</b> These are exercises that are strenuous enough to temporarily speed up your breathing and heart rate. Running, cycling, walking, swimming, and dancing fall in this category.</ul></li>
					<li><ul><b>Maximum Heart Rate is based on the person's age.</b> An estimate of a person's maximum age-related heart rate can be obtained by subtracting the person's age from 220.</li></ul>
					<li><ul><b>Flexibility training or stretching.</b> This type of workout enhances the range of motion of joints. Age and inactivity tend to cause muscles, tendons, and ligaments to shorten over time. Contrary to popular belief, however, stretching and warming up are not synonymous. In fact, stretching cold muscles and joints can make them prone to injury.</ul></li>
					<li><ul><b>Strength, weight, or resistance training.</b> This type of exercise is aimed at improving the strength and function of muscles. Specific exercises are done to strengthen each muscle group. Weight lifting and exercising with stretchy resistance bands are examples of resistance training activities, as are exercises like pushups in which you work against the weight of your own body.</ul></li>
					<li><ul><b>Warm up.</b> This is the act of preparing your body for the stress of exercise. The body can be warmed up with light intensity aerobic movements like walking slowly. These movements increase blood flow, which in turn heats up muscles and joints. "Think of it as a lube job for the body," Bryant explains. At the end of your warm-up, it's a good idea to do a little light stretching.</ul></li>
					</tr>
				
				</div>
			</section>
			





			
</body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>


</html>