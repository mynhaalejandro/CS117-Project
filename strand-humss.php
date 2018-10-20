
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" /> <!---how the website to display*/ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinait National High School - HUMSS</title>
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
					<li><a href="tracks.php" class="current">Tracks</a></li>
					<li><a href="faqs.php">FaQs</a></li>
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

<!---End Header-->
	<section class="humss">
		<div class="container-humss">
		<section class="humss" id="humss-name">
			<h1>Humanities and Social Sciences (HUMSS) Strand</h1>
		</section>
		<section class="humss" id="humss-des">
			<p>The HUMMS strand is designed for those who wonder what is on the other side of the wall. In other words, you are ready to take on the world and talk to a lot of people. This is for those who are considering taking up journalism, communication arts, liberal arts, education, and other social science-related courses in college.
			</p>
			<p> 
			If you take this strand, you could be looking forward to becoming a teacher, a psychologist, a lawyer, a writer, a social worker, or a reporter someday. This strand focuses on improving your communication skills. Oh! And priesthood is a choice in here too!
			</p>
		</section>
		</div>

		<div class="humss" id="humss-1">
			<article>
			<details ontoggle>
				<summary> <strong> What are the subjects in this strand?</strong> </summary>
					<p>While it is true that the HUMMS means less math and less numbers, this does not mean that this strand is ‘easier’ than other strands. Part of the curriculum includes introduction to world religions, Philippine and world literature, political and community development specialization subjects, and more.</p>
			</details>
			<br>
 			<details ontoggle>
				<summary> <strong> What can I do after SHS?</strong> </summary>
					<p><strong>Communication Arts.</strong>
					With various communication disciplines, techniques, and skills learned from the strand, you can become a diplomat, a journalist, a writer, a lawyer among others.</p><br>
					<p><strong>Economics and Sociology.</strong>
					If you’ve got the guts and ideals to go into politics, civic leadership, or community work, the HUMMS got you covered. You can also be involved with careers on history, public administration, social work, anthropology, environmental planning, or theology.</p><br>
					<p><strong>Education.</strong>
					Possible careers under the HUMMS track also include professionals on literature, philosophy, guidance counselling, linguistics, Philippine Studies, and English. At the HUMMS curriculum, you will deal with human experiences through which your lessons would be developed.</p><br>
					<p><strong>Psychology.</strong>
					Other fields that you could qualify are psychotherapy, market research, criminology, and military science.</p>
			</details>
			</article>
		</div>
	</section>
<!---End Strand-->
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
				<a href="faqs.php">FAQS</a>
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