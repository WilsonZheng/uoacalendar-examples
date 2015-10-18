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
						<h2>Facts about Mount Kilimanjaro</h2>
						
					</header>
					
					<p><span class="image left"><img src="images/mountkilimanjaro.jpg" alt="" /></span>Rising majestically above the African plains, the 20,000-foot Mt. Kilimanjaro has beckoned to climbers since the first recorded summit in 1889. Here are 10 interesting facts to help inspire your own future summit:</p>					
					
					<tr>
					<li><ul>Mount Kilimanjaro is the tallest mountain on the African continent and the highest free-standing mountain in the world.</ul></li>
					<li><ul>Kilimanjaro has three volcanic cones, Mawenzi, Shira and Kibo. Mawenzi and Shira are extinct but Kibo, the highest peak, is dormant and could erupt again. The most recent activity was about 200 years ago; the last major eruption was 360,000 years ago.</li></ul>
					
					<li><ul>Nearly every climber who has summitted Uhuru Peak, the highest summit on Kibo’s crater rim, has recorded his or her thoughts about the accomplishment in a book stored in a wooden box at the top.</ul></li>
					<li><ul>The oldest person ever to summit Mt. Kilimanjaro was 87-year-old Frenchman Valtee Daniel.</ul></li>
					<li><ul>Almost every kind of ecological system is found on the mountain: cultivated land, rain forest, heath, moorland, alpine desert and an arctic summit.</ul></li>
					<li><ul>The fasted verified ascent of Mt. Kilimanjaro occurred in 2001 when Italian Bruno Brunod summitted Uhuru Peak in 5 hours 38 minutes 40 seconds. The fastest roundtrip was accomplished in 2004, when local guide Simon Mtuy went up and down the mountain in 8:27.</ul></li>
					<li><ul>The mountain’s snow caps are diminishing, having lost more than 80 percent of their mass since 1912. In fact, they may be completely ice free within the next 20 years, according to scientists.</ul></li>
					<li><ul>Shamsa Mwangunga, National Resources and Tourism minister of Tanzania, announced in 2008 that 4.8 million indigenous trees will be planted around the base of the mountain, helping prevent soil erosion and protect water sources.</ul></li>
					<li><ul>South African Bernard Goosen twice scaled Mt. Kilimanjaro in a wheelchair. His first summit, in 2003, took nine days; his second, four years later, took only six. Born with cerebral palsy, Goosen used a modified wheelchair, mostly without assistance, to climb the mountain.</ul></li>
			
					<li><ul>Approximately 25,000 people attempt to summit Mt. Kilimanjaro annually. Approximately two-thirds are successful. Altitude-related problems is the most common reason climbers turn back.</ul></li>
					</tr>
						
				
				</div>
			</section>
			





			
</body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>


</html>