
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" /> <!---how the website to display*/ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinait National High School - ABM</title>
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
	<section class="abm">
		<div class="container-abm">
		<section class="abm" id="abm-name">
			<h1>Accountancy, Business and Management (ABM) Strand</h1>
		</section>
		<section class="abm" id="abm-des">
			<p>The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for. ABM can also lead you to careers on management and accounting which could be sales manager, human resources, marketing director, project officer, bookkeeper, accounting clerk, internal auditor, and a lot more.
			</p> 
		</section>
		</div>

		<div class="abm" id="abm-1">
			<article>
			<details ontoggle>
				<summary> <strong> What are the subjects in this strand?</strong> </summary>
					<p>The ABM curriculum will allow you to get a deeper appreciation of the fantastic world of accounting and business management without the hassle of going to Algebra, Geometry, Trigonometry, and other specialize mathematical subjects that you won’t need.
					<br> <br>
					Subjects in the ABM will give you the tools you will need on your journey to success in the corporate world. Expect that you will be studying financial and management accounting alongside the legal, business, and organizational contexts that you will be encountering sa enterprise. In taking this strand, you will be able to analyze assets, interpret profitability, understand financial positions, and prepare audit accounts.</p>
			</details>
			<br>
 			<details ontoggle>
				<summary> <strong> What can I do after SHS?</strong> </summary>
					<p><strong>Accountancy.</strong>
					Getting accountancy is not left to just being an accountant. You can become an accounts payable clerk, bookkeeper, budget analyst, internal auditor, chief financial officer among others.</p><br>
					<p><strong>Business Administration.</strong>
					Get on board with other various tracks in the corporate setting like loan officer, administrative assistant, community-service manager, market-research analyst, financial adviser, and even become a statistician.</p><br>
					<p><strong>Agribusiness.</strong>
					This means agriculture-related activities that put farmers, processors, distributors, and consumers within a market system of agricultural products. The Department of Trade and Industry eyes in transforming agricultural farming into a thriving agribusiness-driven sector.</p>
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