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
<title>Healthy Eating Plan</title>
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
						<h2>Healthy eating plan</h2>
						
					</header>
					
					<p>A healthy eating plan gives your body the nutrients it needs every day while staying within your daily calorie goal for weight loss. A healthy eating plan also will lower your risk for heart disease and other health conditions.</p>
					<p>A healthy eating plan:</p>
					
					<tr>
					<li><ul>Emphasizes vegetables, fruits, whole grains, and fat-free or low-fat dairy products</ul></li>
					<li><ul>Includes lean meats, poultry, fish, beans, eggs, and nuts</ul></li>
					<li><ul>Limits saturated and trans fats, sodium, and added sugars</ul></li>
					<li><ul>Controls portion sizes</ul></li>
					</tr>
					<h3>Calories</h3>
					<p><span class="image left"><img src="images/food.jpg" alt="" /></span>To lose weight, most people need to reduce the number of calories they get from food and beverages (energy IN) and increase their physical activity (energy OUT).</p>
					<p>For a weight loss of 1–1 ½ pounds per week, daily intake should be reduced by 500 to 750 calories. In general:</p>
					<tr>
					<li><ul>Eating plans that contain 1,200–1,500 calories each day will help most women lose weight safely.</ul></li>
					<li><ul>Eating plans that contain 1,500–1,800 calories each day are suitable for men and for women who weigh more or who exercise regularly.</ul></li>
					
					</tr>
					<p>Very low calorie diets of fewer than 800 calories per day should not be used unless you are being monitored by your doctor.</p>
					
				</div>
			</section>
			





			
</body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>


</html>