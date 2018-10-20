<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" /> <!---how the website to display*/ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinait National High School - About</title>
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
			<a href="index.php" id="logo"></a>
			<nav>
				<a href="#" id="menu-icon"></a>
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="about.php" class="current">About</a></li>
					<li><a href="tracks.php" >Tracks</a></li>
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

		

	</header>
<!--- Start Slider -->
		<script src="js/jquery.bxslider.min.js"></script><!--For Image Slider-->

		<div class="slide-wrap">
			<section class="slider">
			<article>
				<ul class="slider1">
						<li><img src="img/slider1.jpg"></li>
						<li><img src="img/slider2.jpg"></li>
						<li><img src="img/slider3.jpg"></li>
						<li><img src="img/slider4.jpg"></li>

						
					
				</ul>

				</article></section>
						
        <aside class="sinait">
        <br><br>
				
				<ul >
				<li><p ><h3><center>Sinait National High School</center></h3><br>
				The Sinait National High School, then the Sinait Provincial High School, started as a four-room, bamboo and cogon schoolhouse surrounded by rice paddies in 1947. It is nationally funded general secondary school located at Barangay Ricudo, Sinait, Ilocos Sur. The school serves 6 catchment areas namely Cabugao, Badoc, Pinili, San Juan and Magsingal. The senior high school have 4-story building with four rooms each. And the rest are in house in different vacant rooms in junior high.
			</p></li>
			</ul>
			</aside>
			
		</div>
		

		<script type="text/javascript">
			$('.slider1').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				
			});
			$('.slider2').bxSlider({
				pager:false,
				captions: true,
				maxSlides: 3,
				minSlides: 1,
				slideWidth: 230,
				slideMargin: 10
			});
			$('.slider3').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				controls:false,
			});
		</script>
<!--- End Slider -->
<section class="staggered-animate-container">
<section class="os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".4s">
<div class="clearfix"></div>
	<div  id="inner-wrapper">

<!---Start waypoints delayed animation -->

			
			<section class="one-third">
						<td><i><img src="img/snhsfav.png"></i></td>
			

		</section></div></section>
<section class="os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".4s">
		<section class="one-third">
			<div class="circle">
			<td><i><img src="img/acad.png"></i></td>
			</div>
			<h3>Academic Track</h3>
			<p>
				Academic Tracks are areas of research interest that students choose to help guide them in selecting a course of study and a research area. Many tracks have overlap, and most faculty belong to more than one Academic Track
			</p>
	    </section>
	</section></section>

	<section class="os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".4s">
		<section class="one-third">
			<div class="circle">
			<td><i><img src="img/tvl.png"></i></td>
			</div>

			<h3>Technical Vocanational</h3>
			<p>
				This track also invests primarily on skills that can gain you requisite COCs (Certificates of Competency) and NCs (National Certifications) which would be essential when looking for better career opportunities in agriculture, electronics, and trade.
			</p>
		</section></section>
</div>
<section class="os-animation" data-os-animation="zoomInUp" data-os-animation-delay=".4s">
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
</section>

<!---end waypoints delayed animation -->
</section>

<br>
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