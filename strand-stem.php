	
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" /> <!---how the website to display*/ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinait National High School - STEM</title>
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
	<section class="stem">
		<div class="container-stem">
		<section class="stem" id="stem-name">
			<h1>Science, Technology, Engineering, and Mathematics (STEM) Strand</h1>
		</section>
		<section class="stem" id="stem-des">
			<p>Science, Technology, Engineering, and Mathematics are intertwining disciplines when applied in the real world. The difference of the STEM curriculum with the other strands and tracks is the focus on advanced concepts and topics.
			</p>
			<p> 
			Under the track, you can become a pilot, an architect, an astrophysicist, a biologist, a chemist, an engineer, a dentist, a nutritionist, a nurse, a doctor, and a lot more. Those who are also interested in Marine Engineering should take this track.
			</p>
		</section>
		</div>

		<div class="stem" id="stem-1">
			<article>
			<details ontoggle>
				<summary> <strong> What are the subjects in this strand?</strong> </summary>
					<p><strong>Earth Science.</strong>
					STEM will offer you a subject on Earth Science that would discuss continental drift, index fossils, and renewable energy. This program would also help you identify areas that vulnerable to disasters, interpret hazard maps, and learn the proper use of hydrometereological tools.</p><br>
					<p><strong>Pre-Calculus and Basic Calculus.</strong>
					Take out your calculators and get a piece of paper. This should be your starter pack for your Pre-Calculus and Basic Calculus classes. These are all essential once you take your bachelor course on Mathematics or Engineering.</p><br>
					<p><strong>Physics.</strong>
					Physics classes will explain the various phenomenons that are happening around us. You can also try magic tricks of kinematics, momentum, impulse, and a lot more. Also take into account the various thermodynamic concepts, oscillations, gravity among others.</p>
			</details>
			<br>
 			<details ontoggle>
				<summary> <strong> What can I do after SHS?</strong> </summary>
					<p><strong>Agriculture.</strong>
					For the people who love being outdoors, STEM is the track for you! You can get degrees varying from agricultural engineering, animal science, food technology, horticulture, forestry to veterinary medicine.</p><br>
					<p><strong>Engineering.</strong>
					Subjects under STEM are tailor fitted to courses such as civil engineering, chemical engineering, computer engineering, electrical engineering, electronics & communication engineering, industrial engineering, and mechanical engineering.</p><br>
					<p><strong>Health Care.</strong>
					Anatomy and Physiology just got easy with the STEM curriculum specialized subjects of chemistry and biology. Your future might hold you as a doctor, nurse, pharmacist, physical therapist, dentist, or medical technologist. I can already see that white coat on you!</p><br>
					<p><strong>Information Technology.</strong>
					Equipped with the basic essentials to survive the rapid global IT marketplace, look forward to get that degree on Computer Science, Computer Technology, and Information Technology as a STEM student.</p><br>
					<p><strong>Mathematics and Science.</strong>
					Mathematics and Science is the heart of the STEM curriculum. Different technical career paths are open for you to take on. Various industries such as banking, civil service, financial services, consulting, and retail can become your playground in the future.</p>
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