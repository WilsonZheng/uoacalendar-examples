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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>CSS Registration Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/navheader.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/div.css"/>
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

<center>
				<ul class="actions" >
					<li><a href="#" class="button">Add Workouts</a></li>
					<li><a href="viewProfile.php" class="button alt">My Profile</a></li>
					<li><a href="#" class="button alt">My Calendar</a></li>
					<li><a href="#" class="button alt">My Summary</a></li>
					
				</ul>
	</center>	

<body>
<form action="editProfile.php" class = "register">
   <h1>Profile</h1>
	<fieldset class="row1">
        <legend>Personal Details
        </legend>
        <p>
            <label>Name  &nbsp &nbsp &nbsp &nbsp<?php
					echo $userRow['Name'];					
				?>
			</label>
        </p>
        <p>
            <label>Gender &nbsp &nbsp &nbsp &nbsp <?php
					echo $userRow['Gender'];					
				?></label>
        </p>
        
        <p>
           <label>Height &nbsp &nbsp &nbsp &nbsp <?php
					echo $userRow['Height'];					
				?></label>
        </p>
        <p>
           <label>Weight &nbsp &nbsp &nbsp &nbsp
				<?php
					echo $userRow['Weight'];					
				?></label>
        </p>
        <p>
           <label>BMI &nbsp &nbsp &nbsp &nbsp
				<?php
					echo $userRow['BMI'];					
				?></label>
        </p>
    </fieldset>
    <div><button class="button" name = "proceed">Edit &raquo;</button></div>
</body>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>
</html>	