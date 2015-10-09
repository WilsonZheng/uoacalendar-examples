<?php
session_start();

include_once 'dbconnect.php';

mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("dbtest") or die(mysql_error());

if(isset($_POST['proceed']))
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
<body>
<form action="home.php" class="register">
    <h1>Profile</h1>

    <fieldset class="row2">
        <legend>Personal Details
        </legend>
        <p>
            <label>Name *
            </label>
            <input type="text" class="long" name="name" required/>
        </p>
        <p>
            <label>Gender *</label>
            <input type="radio" value="radio" name="radio" required/>
            <label class="gender">Male</label>
            <input type="radio" value="radio" name="radio"/>
            <label class="gender">Female</label>
        </p>
        <p>
            <label>Birthdate *
            </label>
            <select class="date" name = "dob" required>
                <option value="1">01
                </option>
                <option value="2">02
                </option>
                <option value="3">03
                </option>
                <option value="4">04
                </option>
                <option value="5">05
                </option>
                <option value="6">06
                </option>
                <option value="7">07
                </option>
                <option value="8">08
                </option>
                <option value="9">09
                </option>
                <option value="10">10
                </option>
                <option value="11">11
                </option>
                <option value="12">12
                </option>
                <option value="13">13
                </option>
                <option value="14">14
                </option>
                <option value="15">15
                </option>
                <option value="16">16
                </option>
                <option value="17">17
                </option>
                <option value="18">18
                </option>
                <option value="19">19
                </option>
                <option value="20">20
                </option>
                <option value="21">21
                </option>
                <option value="22">22
                </option>
                <option value="23">23
                </option>
                <option value="24">24
                </option>
                <option value="25">25
                </option>
                <option value="26">26
                </option>
                <option value="27">27
                </option>
                <option value="28">28
                </option>
                <option value="29">29
                </option>
                <option value="30">30
                </option>
                <option value="31">31
                </option>
            </select>
            <select required>
                <option value="1">January
                </option>
                <option value="2">February
                </option>
                <option value="3">March
                </option>
                <option value="4">April
                </option>
                <option value="5">May
                </option>
                <option value="6">June
                </option>
                <option value="7">July
                </option>
                <option value="8">August
                </option>
                <option value="9">September
                </option>
                <option value="10">October
                </option>
                <option value="11">November
                </option>
                <option value="12">December
                </option>
            </select>
            <input class="year" type="text" size="4" maxlength="4" onkeypress="return isNumber(event)" required/>e.g 1976
        </p>
        <p>
            <label>Height (cm)*
            </label>
            <input class="long" type="text" id="height" onkeypress="return isNumber(event)" name="height" required/>

        </p>
        <p>
            <label>Weight (kg)*
            </label>
            <input class="long" type="text" id ="weight"  onkeypress="return isNumber(event);" onkeyup="calculate()" name ="weight" required/>
        </p>
        <p>
            <label>BMI
            </label>
            <input class="long" type="text" id="bmi" readonly="readonly" value="0" name="bmi" />
        </p>
    </fieldset>
    <div><button class="button" name = "proceed">PROCEED &raquo;</button></div>
</form>
</body>
</html>





