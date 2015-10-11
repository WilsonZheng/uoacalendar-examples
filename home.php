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
<title>Welcome - <?php echo $userRow['email']; ?></title>
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
					<li><a href="index.html">Home</a></li>
					<li><a href="viewProfile.php">My Profile</a></li>
					<li><a href="uoa.php">Manage your calendar</a></li>
					<li><a href="summary.php">Check Workout Summary</a></li>
					
				</ul>
			</nav>
			
			
			<center>
				<ul class="actions" >
					<li><a href="#" class="button">Add Workouts</a></li>
					<li><a href="viewProfile.php" class="button alt">My Profile</a></li>
					<li><a href="uoa.php" class="button alt">My Calendar</a></li>
					<li><a href="summary.php" class="button alt">My Summary</a></li>
					
				</ul>
			</center>
			
			
			<body id="one" class="wrapper style1">
				<div class="inner">
				
						<article class="feature left">
						<span class="image"><img src="images/fitness101.jpg" alt="" /></span>
						<div class="content">
							<h2>Beginner's Guide for Exercising</h2>
							<p>You've decided it's time to start exercising. Congratulations! 
							You've taken the first step on your way to a new and improved body and mind.
							If you do not know how to start working out yourself, check out our beginner's guide.</p>
							<ul class="actions">
								<li>
									<a href="fitness101.php" class="button special">More</a>
								</li>
							</ul>
						</div>	
						</article>
						
						
						<article class="feature right">
						<span class="image"><img src="images/sampleworkout.jpg" alt="" /></span>
						<div class="content">
							<h2>Samples Workout for Beginners</h2>
							<p>Don't know what workout suit you? Check out the samples workout provided for you.</p>
							<ul class="actions">
								<li>
									<a href="sampleworkout.php" class="button special">More</a>
								</li>
							</ul>
						</div>
						</article>
						
						
						<article class="feature left">
						<span class="image"><img src="images/healthyfood.png" alt="" /></span>
						<div class="content">
							<h2>Nutritional Plan</h2>
							<p>Are you still eating unhealthy food? A healthy eating plan will lower your risk for many 
							disease and keep your exercise outcome. Check out what to eat to be healthy!</p>
							<ul class="actions">
								<li>
									<a href="healthyplan.php" class="button special">More</a>
								</li>
							</ul>
						</div>
						</article>
						
						
				</div>
			</body>
			





			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>If you have any feedback please send us your message</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>
</body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>


</html>