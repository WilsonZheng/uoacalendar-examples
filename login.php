<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	
		?>
        <?php
	if($row['password']==md5($upass))
	{	
		$_SESSION['user'] = $row['user_id'];
		?>
        <?php
		$count = mysql_query("SELECT count(*) 'count' FROM users WHERE email='$email' AND Height IS NOT NULL");
		$result = mysql_fetch_array($count);
		$countvalue = $result['count'];
		if($countvalue==0) 
		{	
		header("Location: Profile.php");
		}
		else
		{
		?>

        <?php
		header("Location: home.php");
		}
		
	}
	else
	{
		
		?>
        <script>alert('Email or password not correct! Please try again.');</script>
        <?php
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="assets/css/login.css" type="text/css" />
</head>
<body>

<div id="header">
	<div id="left">
    <h1>Fantastic Training</h1>
    </div>
    
</div>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
<tr>
<td><a href="index.html">Back to Home Page</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>



