<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" /> <!---how the website to display*/ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinait National High School - FAQS</title>
	<link rel="shortcut icon" type="image/png" href="img/snhsfav.png"/>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />	
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!--   	<script src="https://code.jquery.com/jquery-3.1.1.js"></script> -->
<!--   	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->
	<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
  	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
  	<link rel="stylesheet" type="text/css" href="css/animate.css">
  	<link rel="stylesheet" type="text/css" href="css/waypoints.css">
  	<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
  	<script src="js/waypoints.js" type="text/javascript"></script>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<header>
		<div id="header-inner">
			<a href="index.php" id="logo" title="Sinait National High School"></a>
			<nav>
				<a href="#" id="menu-icon"></a>
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="about.php" >About</a></li>
					<li><a href="tracks.php" >Tracks</a></li>
					<li><a href="faqs.php" class="current">FaQs</a></li>
				</ul>
				<ul class="hi" id="inner">
					<li><a href="NewForm/index.php">Register Now</a></li>
            		<li><a onclick="feedback()" style="cursor: pointer;">Feedback</a></li>
            		<li><a href="login.php">LogIn</a></li>
          		</ul>
			</nav>
		</div>
	</header>
	<div id="myModal" class="modal">
			<div id="modal-content">
				<h3 class="border">FEEDBACK</h3>
					<form action="index.php" method="POST">
						<table>
							<tr>
								<td><input type="radio" id="like" name="likes_dislikes"  value="like" class="like">LIKE<br></td>	
							</tr>
							<tr>
								<td><input type="radio" id="dislike" name="likes_dislikes" value="dislike" class="like">DISLIKE<br></td>
							</tr>	
						</table>
					
						<textarea rows="4" cols="35" class="txtar" name="msg" placeholder="Message here..." required></textarea>
						<h5 id="fp">If you have a legal or privacy issue, you can report a concern here!</h5>
              
              			<input type="submit" name="submit" class="btn-fb">
						<a class="btn-fb" onclick="closeModal()">Back</a>
					</form>
			</div>
	</div>


	<?php
	error_reporting(0);
	require("my_connection.php");

		if (isset($_POST['likes_dislikes'])&&isset($_POST['msg'])) {
			if (!empty($_POST['likes_dislikes'])&&!empty($_POST['msg'])) {
				//query
				$query = "INSERT INTO feedbacks VALUES (NULL,'".$_POST['likes_dislikes']."','".$_POST['msg']."')";
				//execute query
				$result = mysqli_query($dbase,$query) or die("Error5: ".mysqli_error($dbase));
				
			}
			else {
				echo "<script>alert('Fill in all fields');</script>";
			}
		}

	?>
	<script type="text/javascript">
		var modal = document.getElementById("myModal")

		function feedback(){
			modal.style.display = "block";
		}

		function closeModal(){
			modal.style.display = "none";

		}
	</script>




<section class="faqs">

 <div class="faqs">
<article>

<details ontoggle>
<summary> <strong> How do I log in?</strong> </summary>
<p>The system will automatically ask for your username and password but first you need to register.</p>
</details>
<br>


 <details ontoggle>
<summary> <strong> What Browsers are supported by the Online Assessment application?</strong> </summary>
<p>Internet Explorer 9 or greater, Google Chrome, Firefox, and Safari 8.0+.</p>
</details>
<br>

<details ontoggle>
<summary> <strong> What if I do not have all the information to complete Online Assessment?</strong></summary>
<p>Certain informations is to be submitted to the school to be officially enrolled. Once submitted, information can be added by the school data staff during the appointment with your assigned school.</p>
</details>
<br>


<details ontoggle>
<summary><strong> Can I use online Assessment for any student at any grade level? </strong></summary>
	<p>Online Assessment can only be used for all students in grades 11 and 12 at Sinait National High School.</p>
</details>
</article>
</div>
</section>
<!---End FAQs-->
			<div class="clearfix"></div>
		<footer>
			<div id="footer-inner">
			<section class="one-third" id="footer-third">
				<h3>Contact</h3>
				<p class="footercontact">Sinait National High School<br>
				<b class="phone">Call (077) 674 0004</b><br><br>
				@SinaitNationalHighSchool
										<br>
				Sinait National High School Official Page</p>
				
			</section>
			<section class="one-third" id="footer-third">
				<h3>Social</h3>
				<br>
					<ul class="social">
						<li><a href="https://web.facebook.com/pg/sinaitnhspage/photos/?ref=page_internal" target="_blank"> 
						<i class="fa fa-facebook"></i></a></li>
						<li><a href="https://web.facebook.com/chimchimgotnojams7" target="_blank"> 
						<i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://web.facebook.com/chimchimgotnojams7" target="_blank"> 
						<i class="fa fa-twitter"></i></a></li>
						<li><a href="https://web.facebook.com/chimchimgotnojams7" target="_blank"> 
						<i class="fa fa-youtube"></i></a></li>
					</ul>
				
			</section>
			<section class="one-third" id="footer-third-last"></section>
			<h3>Pages</h3>
			<br>
			<h5>
				<a href="index.php">Home | </a>
				<a href="about.php">About| </a>
				<a href="tracks.php">Tracks | </a>
				<a href="#">FAQS</a>
			</h5>
			</div>
		</footer>
		<footer class="second">
		<p>&copy Sinait National High School, Assessment</p>
		</footer>
<!---End Footer-->
</body>
</html>

<style type="text/css">
.btn-fb {
  	text-align: center;
  	width: 100px;
  	background: #27AE60;
  	font-weight: bold;
  	color: white;
  	border: 0 none;
  	border-radius: 1px;
  	cursor: pointer;
  	padding: 10px 5px;
  	margin: 10px 5px;
}
.btn-fb:hover, .btn-fb:focus {
  	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}

</style>