<?php

require("my_connection.php");

//Check if value have been submitted
if (isset($_POST['username'])&&isset($_POST['password'])) {
	//Check if value is equal to NULL
		//query
		$query = "SELECT * FROM signup WHERE uname='".$_POST['username']."' AND pword='".$_POST['password']."'";
		//execute query
		$result = $dbase->query($query);
		$count = $result->num_rows;

		if($count > 0) {
			if($_POST['username'] == "admin" && $_POST['password'] == "admin") {
				header("location: admin-panel/index.php");
			}
			else {
				header("location: stud-panel/index.php");
			}

			echo "<script>alert('You have successfully logged in.');</script>";
		}
		else {
			echo "<script>alert('Incorrect username and password.');</script>";
		}
		
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" /> <!---how the website to display*/ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinait National High School</title>
	<link rel="shortcut icon" type="image/png" href="img/snhsfav.png"/>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="style.css" />	
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/animate.css">
  	<link rel="stylesheet" type="text/css" href="css/waypoints.css">
  	<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
  	<script src="js/waypoints.js" type="text/javascript"></script>
</head>

<body id="enroll">
	<div class="loginBox">
		<img src="img/man.png" class="user">
		<h2>log in</h2>
		<form action="login.php" method='POST'>
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="******">
			<input type="submit" id='login' value="LOG IN">
			<h5>Don't have an account? <a href="NewForm/index.php">Register Now</a> </h5>

		</form>
	</div>
</body>
</html>

