<head>
    <meta charset="utf-8" /> <!---how the website to display*/ -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Now</title>
    <link rel="shortcut icon" type="image/png" href="img/snhsfav.png"/>
    <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<!--     <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/css.css">
<!--     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
</head>




<?php
error_reporting(0);
require("my_connection.php");

$last_name = strtoupper($_POST['last_name']);
$first_name = strtoupper($_POST['first_name']);
$middle_name = strtoupper($_POST['middle_name']);
$full_name = $first_name." ".$middle_name." ".$last_name;
$age = $_POST['age'];
$date_enroll = $_POST['date_enroll'];
$address = strtoupper($_POST['address']);
$lrn = $_POST['lrn'];
$sex = strtoupper($_POST['sex']);
$email = $_POST['email'];
$bday = $_POST['birthday'];
$bplace = strtoupper($_POST['birthplace']);

$titles = strtoupper($_POST['titles']);
$name = strtoupper($_POST['name']);
$parents_guardian = $titles." ".$name;
$cp_number = $_POST['cp_number'];
$occupation = strtoupper($_POST['occupation']);

$enrollment_credentials = strtoupper($_POST['enrollment_credentials']);
$grade_level = strtoupper($_POST['grade_level']);
$semester = strtoupper($_POST['semester']);
$sch_last_attended = strtoupper($_POST['sch_last_attended']);
$from = $_POST['from'];
$to = $_POST['to'];
$sch_year = $from."-".$to;
$sch_address = strtoupper($_POST['sch_address']);
$stud_type = strtoupper($_POST['stud_type']);
$transferred_from = strtoupper($_POST['transferred_from']);

$track = strtoupper($_POST['track']);
$strand = strtoupper($_POST['strand']);

$username = $_POST['username'];
$password = $_POST['password'];


//Check if value have been submitted
if (isset($_POST['submit'])) {
	//Check if value is equal to NULL
	if (!empty($_POST['submit'])) {
			//$sql="select id from users";
    		
			$query = "INSERT INTO process VALUES (NULL,'".$enrollment_credentials."','".$grade_level."','".$semester."','".$sch_last_attended."',
				'".$sch_year."','".$sch_address."','".$stud_type."','".$transferred_from."')";
			$result = mysqli_query($dbase,$query) or die("Error1: ".mysqli_error($dbase));
			$process_fk = mysqli_insert_id($dbase);

			$query = "INSERT INTO parents VALUES (NULL,'".$parents_guardian."','".$cp_number."','".$occupation."')";
			$result = mysqli_query($dbase,$query) or die("Error2: ".mysqli_error($dbase));
			$parent_fk = mysqli_insert_id($dbase);

			$query = "INSERT INTO tracks VALUES (NULL,'".$track."')";
			$result = mysqli_query($dbase,$query) or die("Error3: ".mysqli_error($dbase));
			$track_fk = mysqli_insert_id($dbase);

			$query = "INSERT INTO strands VALUES (NULL,'".$strand."')";
			$result = mysqli_query($dbase,$query) or die("Error4: ".mysqli_error($dbase));
			$strand_fk = mysqli_insert_id($dbase);

			$query = "INSERT INTO signup VALUES (NULL,'".$username."','".$password."')";
			$result = mysqli_query($dbase,$query) or die("Error4: ".mysqli_error($dbase));
			$signup_fk = mysqli_insert_id($dbase);

			//query
			$query = "INSERT INTO students VALUES (NULL,'".$full_name."','".$age."','".$date_enroll."','".$address."','".$lrn."',
				'".$sex."','".$email."','".$bday."','".$bplace."','".$process_fk."','".$parent_fk."','".$track_fk."','".$strand_fk."',
				'".$signup_fk."')";
			//execute query
			$result = mysqli_query($dbase,$query) or die("Error5: ".mysqli_error($dbase));
			echo "<script>alert('Saved');</script>";
	}
	else {
		echo "<script>alert('Fill in all fields');</script>";
	}
}

?>
<body>
<center>
<form action="index.php" method='POST'>

<div id="msform">
		<h2 class="fs-title">REGISTER NOW</h2>
    	<h3 class="fs-subtitle">This is your Registration Form</h3>
		<label>Username:</label>
        <input type="text" name="username" placeholder="Username" required>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required>
        <label>Confirm Password:</label>
        <input type="password" name="retype_password" placeholder="Confirm Password" required>

        <label>Last Name:</label>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <label>First Name:</label>
        <input type="text" name="first_name" placeholder="First Name" required>
        <label>Middle Name:</label>
        <input type="text" name="middle_name" placeholder="Middle Name">

        <label>Age:</label>
        <input type="text" name="age" placeholder="Age" required>
        <label>Date:</label>
        <input type="date" name="date_enroll" placeholder="Date" required>
        <label>Complete Address:</label>
        <input type="text" name="address" placeholder="Complete Address(Barangay, Town and Province)" required>

        <label>Learner Reference Number (LRN):</label>
        <input type="text" name="lrn" placeholder="Learner Reference Number (LRN)" required>
        <label>Sex</label>
        <select name="sex" required>

            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Email Address">

        <label>Birthday:</label>
        <input type="date" name="birthday" placeholder="Birthday" required>
        <label>Birthplace:</label>
        <input type="text" name="birthplace" placeholder="Town and Province" required>

        <label>Parents/Guardian:</label>
        <select name="titles">
            <option value="Mr & Mrs.">Mr & Mrs.</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
        </select>
        <input type="text" name="name" placeholder="Parents/Guardian Name" required>
        <label>Cellphone Number:</label>
        <input type="text" name="cp_number" placeholder="Cellphone Number" required>
        <label>Occupation:</label>
        <input type="text" name="occupation" placeholder="Occupation" required>

        <label>Enrollment Credentials:</label>
        <input type="text" name="enrollment_credentials" placeholder="Enrollment Credentials" required>
        <label>Grade Level:</label>
        <select name="grade_level" required>
          <option value="" selected disabled hidden>Select your grade level</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
          </select>
        <label>Semester:</label>
        <select name="semester" required>
          <option value="" selected disabled hidden>Select your semester</option>
            <option value="First">First Semester</option>
            <option value="Second">Second Semester</option>
          </select>
  
      
        <label>School Last Attended:</label>
        <input type="text" name="sch_last_attended" placeholder="School Last Attended" required>
        <label>School Address:</label>
        <input type="text" name="sch_address" placeholder="Brgy., Town and Province" required> 
       <label>School Year:</label>
        <select id="from" name="from" required>
          <option id="from" value="" selected disabled hidden>yyyy</option>
            <option id="from" value="2016">2016</option>
            <option id="from" value="2017">2017</option>
            <option id="from" value="2018">2018</option>
            <option id="from" value="2019">2019</option>
            <option id="from" value="2020">2020</option>
          </select>-
          <select id="to" name="to" required>
            <option id="to" value="" selected disabled hidden>yyyy</option>
            <option id="to" value="2017">2017</option>
            <option id="to" value="2018">2018</option>
            <option id="to" value="2019">2019</option>
            <option id="to" value="2020">2020</option>
          </select>

        
        <label>Student Type:</label>
        <input class="type" id="type1" type="checkbox" name="stud_type" onclick="validate('type1');" value="New">New
        <input class="type" id="type2" type="checkbox" name="stud_type" onclick="validate('type2');" value="Returning">Returning
        <input class="type" id="type3" type="checkbox" name="stud_type" onclick="validate('type3'); " value="Old">Old

      <fieldset id="tf">
      <label id="transferred_from1">Transferred From:</label>
      <input id="transferred_from" type="text" name="transferred_from" placeholder="Transferred From">
      </fieldset> 

      <br>

        <label>Track:</label><br>
        <input id="track1" type="checkbox" name="track" value="Academic" onclick="validate1('track1');">Academic
        <input id="track2" type="checkbox" name="track" value="Technical-Vocational-Livelihood" onclick="validate1('track2');">Technical-Vocational-Livelihood
     
     <br>

        <fieldset id="acad">
        <label>Academic Strand:</label>
        <select name="strand">
            <option id="from" value="" selected disabled hidden>Select your Academic Strand</option>
            <option value="Accountancy, Business and Management">Accountancy, Business and Management (ABM)</option>
            <option value="General Academic Strand">General Academic Strand (GAS)</option>
            <option value="Humanities and Social Sciences">Humanities and Social Sciences (HUMSS)</option>
            <option value="Science, Technology, Engineering and Mathematics">Science, Technology, Engineering and Mathematics (STEM)</option>
        </select>
        </fieldset> 


        <fieldset id="techvoc">
        <label>Tech-Voc Strand:</label>
        <select  name="strand">
            <option id="from" value="" selected disabled hidden>Select your Tec-Voc Strand</option>
            <option value="Agricultural Crops Production">Agricultural Crops Production (ACP)</option>
            <option value="Home Economics">Home Economics (HE)</option>
            <option value="Information and Communications Technology">Information and Communications Technology (ICT)</option>
        </select>
        </fieldset>
				

		    <input type="submit" name="submit" class="next action-button" value="SUBMIT"/>
			<input value="BACK" class="next action-button" onclick="history.go(-1)">


</div>
</form>



<form method="POST" action="pdf.php">
    <div id="msform">
          <h2 class="fs-title">GET YOUR REGISTRATION FORM HERE</h2>
      <h3 class="fs-subtitle">This is your Registration Form</h3>

    <label>Enter your LRN:</label>
    <input type="text" name="lrn">
    <input type="submit" name="search" class="next action-button1" value="Click here to download">



        <?php

        require("my_connection.php");
        error_reporting(0);
    
    //add error_reporting(0); to remove errors 
        $query = "SELECT * FROM students  
            LEFT JOIN process ON process_fk = process_id
            LEFT JOIN parents ON parent_fk = parent_id
            LEFT JOIN tracks ON track_fk = track_id
            LEFT JOIN strands ON strand_fk = strand_id
            WHERE lrn= '".$_POST['lrn']."'";
        $result = mysqli_query($dbase,$query) or die("Error2: ".mysqli_error($dbase));
        ?>
</div>
</form>


</center>
</body>

<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat);
body {
    background: #10368B;
    font-family: montserrat, arial, verdana;
		color:black;
    font-size: 14px;
}
form {
	display:inline-block;
	width:40%;
	padding:20px ;
	font-size:120%;
	margin: 20px 200px;
	border-radius:5px;
	text-align:left;
	background: white;
	-webkit-box-shadow: 0 0 15px 2px grey;
    -moz-box-shadow: 0 0 15px 2px grey;
    box-shadow: 0 0 15px 2px grey;
}
label {
	float: left;
	font-size: 14px;
	color: black;
}
#msform {
  	width: 700px;
  	margin: 50px auto;
  	text-align: center;
  	position: relative;

}
#msform div {
  	background: white;
  	border: 0 none;
  	border-radius: 3px;
  	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
  	padding: 20px 30px;
  	box-sizing: border-box;
  	width: 80%;
  	margin: 0 10%;
  
  	/*stacking fieldsets above each other*/
  	position: relative;
}
#msform input, #msform textarea, #msform select, #msform option{
  	padding: 15px;
  	border: 1px solid #ccc;
  	border-radius: 3px;
  	margin-bottom: 10px;
  	width: 100%;
  	box-sizing: border-box;
  	font-family: montserrat;
  	color: #2C3E50;
  	font-size: 13px;
}
#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform .action-button {
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
#msform .action-button:hover, #msform .action-button:focus {
  	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
#msform .action-button1 {
  	text-align: center;
  	width: 200px;
  	background: #27AE60;
  	font-weight: bold;
  	color: white;
  	border: 0 none;
  	border-radius: 1px;
  	cursor: pointer;
  	padding: 10px 5px;
  	margin: 10px 5px;
}
#msform .action-button1:hover, #msform .action-button1:focus {
  	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
  	font-size: 25px;
  	text-transform: uppercase;
  	color: #2C3E50;
  	margin-bottom: 10px;
}
.fs-subtitle {
  	font-weight: normal;
  	font-size: 13px;
  	color: #666;
  	margin-bottom: 20px;
}
</style>

<script type="text/javascript">
	function validate(checkbox){
		var totalCount = 0;
		var x = document.getElementById(checkbox);
			
		for(i=1;i<=3;i++){
			var y = document.getElementById("type" + i);
			if(y.checked){
				totalCount++;
			}
		}

		if(totalCount > 1){
			x.checked = false;
			alert("Please Select one only");
		}
	}

	var elem3 = document.getElementById('tf'),
    	checkBox = document.getElementById('type1');
		checkBox.checked = false;
		checkBox.onchange = function() {
    	elem3.style.display = this.checked ? 'block' : 'none';
	};
	checkBox.onchange();

	var elem4 = document.getElementById('tf'),
    	checkBox = document.getElementById('type2');
		checkBox.checked = false;
		checkBox.onchange = function() {
    	elem4.style.display = this.checked ? 'block' : 'none';
	};
	checkBox.onchange();

	$('#type3').click(function () {
    	if ($(this).prop('checked')) {
        	$('#transferred_from').val('None');
    	} else {
        	$('#transferred_from').val('');
    	}
	});

	var elem1 = document.getElementById('acad'),
    	checkBox = document.getElementById('track1');
		checkBox.checked = false;
		checkBox.onchange = function() {
    	elem1.style.display = this.checked ? 'block' : 'none';
	};
	checkBox.onchange();

	var elem2 = document.getElementById('techvoc'),
    	checkBox = document.getElementById('track2');
		checkBox.checked = false;
		checkBox.onchange = function() {
    	elem2.style.display = this.checked ? 'block' : 'none';
	};
	checkBox.onchange();

	function validate1(checkbox){
		var totalCount = 0;
		var x = document.getElementById(checkbox);
			
		for(i=1;i<=2;i++){
			var y = document.getElementById("track" + i);
			if(y.checked){
				totalCount++;
			}
		}

		if(totalCount > 1){
			x.checked = false;
			alert("Please Select 1 track only");
		}
	}

	function validate2(checkbox){
		var totalCount = 0;
		var x = document.getElementById(checkbox);
			
		for(i=1;i<=4;i++){
			var y = document.getElementById("strand" + i);
			if(y.checked){
				totalCount++;
			}
		}

		if(totalCount > 1){
			x.checked = false;
			alert("Please Select 1 strand only");
		}
	}

	function validate3(checkbox){
		var totalCount = 0;
		var x = document.getElementById(checkbox);
			
		for(i=1;i<=3;i++){
			var y = document.getElementById("strand" + i);
			if(y.checked){
				totalCount++;
			}
		}

		if(totalCount > 1){
			x.checked = false;
			alert("Please Select 1 strand only");
		}
	}
</script>


