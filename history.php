
<?php
session_start();
include_once 'dbconnect.php';
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
	<link rel="stylesheet" type="text/css" href="assets/css/table.css"/>
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
			
			
<body>
<form action="home.php" class = "register">
   <h1 align = 'center'><b>Workout Summary</b></h1>
		
		<br>
		
		<table class="menutable">
		<tr>
			<td>
				<label><input type="radio" name="summaryPage" value="http://localhost:8080/summary.php" onclick="document.location=this.value"/>Summary</label>
			</td>
			<td>
				<label><input type="radio" name="summaryPage" value="http://localhost:8080/history.php" onclick="document.location=this.value" checked/>History</label>
			</td>
		</tr>
		</table>
		
		<br>
	
	<!-- Table goes in the document BODY -->
	<table class="gridtable">
		<tr>
			<th>Date</th>
			<th>Workout Type</th>
			<th>Duration</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>01/10/2015</td>
			<td>Cycling</td>
			<td>0.5 hour</td>
			<td><img src="Smiley.jpg" alt="Smiley face" height="25" width="25"></td>
		</tr>
		<tr>
			<td>02/10/2015</td>
			<td>No activity</td>
			<td>0 hour</td>
			<td><img src="Loser.jpg" alt="Loser face" height="25" width="25"></td>
		</tr>
		<tr>
			<td>03/10/2015</td>
			<td>Running</td>
			<td>0.5 hour</td>
			<td><img src="Smiley.jpg" alt="Smiley face" height="25" width="25"></td>
		</tr>
		<tr>
			<td>04/10/2015</td>
			<td>No activity</td>
			<td>0 hour</td>
			<td><img src="Loser.jpg" alt="Loser face" height="25" width="25"></td>
		</tr>
		<tr>
			<td>05/10/2015</td>
			<td>Climbing</td>
			<td>0.5 hour</td>
			<td><img src="Smiley.jpg" alt="Smiley face" height="25" width="30"></td>
		</tr>
		<tr>
			<td>06/10/2015</td>
			<td>No activity</td>
			<td>0 hour</td>
			<td><img src="Loser.jpg" alt="Loser face" height="25" width="25"></td>
		</tr>
		<tr>
			<td>07/10/2015</td>
			<td>Walking</td>
			<td>1 hour</td>
			<td><img src="Smiley.jpg" alt="Smiley face" height="25" width="25"></td>
		</tr>
		<tr>
			<td>09/10/2015</td>
			<td>Swimming</td>
			<td>2.5 hour</td>
			<td><img src="Smiley.jpg" alt="Smiley face" height="25" width="25"></td>
		</tr>
	</table>

		
</table>
	
    <div><button class="button" name = "proceed">OK &raquo;</button></div>
	</body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>
</html>


