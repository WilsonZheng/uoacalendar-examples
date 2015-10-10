<?php
session_start();

include_once 'dbconnect.php';

$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if(isset($_POST['done']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$height = mysql_real_escape_string($_POST['height']);
	$weight = mysql_real_escape_string($_POST['weight']);
	$bmi = mysql_real_escape_string($_POST['bmi']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$user_Id = $_SESSION['user'];
	
	?>
	<script>alert(user_Id.value);</script>
	<?php
	$sql = "UPDATE users SET Name = '$name', Gender = '$gender', Height = '$height',
	Weight = '$weight', BMI = '$bmi' where user_id = ".$_SESSION['user'];
	
	if (mysql_query($sql)) {
		?>
			<script>alert('Record updated successfully');</script>
		<?php
		echo "Record updated successfully";
		header("Location: home.php");
	} else {
		?>
			<script>alert('Record updated unsuccessfully');</script>
		<?php
		echo "Error updating record ";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>CSS Registration Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/navheader.css"/>
    <script type = "text/javascript" language="javascript">

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        function calculate()
        {
            var height = document.getElementById("height").value;
            var weight = document.getElementById("weight").value;
            var heightInMetre = (height/ 100);
            var square = heightInMetre * heightInMetre;
            var bmi= weight / square ;
            document.getElementById("bmi").value= bmi.toFixed(2);
        }
    </script>
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
<form method="post" class="register">
    <h1>Profile</h1>

    <fieldset class="row2">
        <legend>Personal Details
        </legend>
        <p>
            <label>Name *
            </label>
            <input type="text" class="long" name="name" value = "<?php echo $userRow['Name']; ?> " required/>
        </p>
        <p>
            <label>Gender *</label>
            <input type="radio" value="male" name="gender" required/>
            <label class="gender">Male</label>
            <input type="radio" value="female" name="gender"/>
            <label class="gender">Female</label>
        </p>
        
        <p>
            <label>Height (cm)*
            </label>
            <input class="long" type="text" id="height" onkeypress="return isNumber(event)" name="height" value = "<?php echo $userRow['Height']; ?> " required/>

        </p>
        <p>
            <label>Weight (kg)*
            </label>
            <input class="long" type="text" id ="weight"  onkeypress="return isNumber(event);" onkeyup="calculate()" name ="weight" value = "<?php echo $userRow['Weight']; ?> " required/>
        </p>
        <p>
            <label>BMI
            </label>
            <input class="long" type="text" id="bmi" readonly="readonly"  value = "<?php echo $userRow['BMI']; ?> " name="bmi" />
        </p>
    </fieldset>
	 <div><button class="button" name = "done">DONE</button></div>
</form>
</body>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			
			<script src="assets/js/main.js"></script>
</html>





