<?php
    require("my_connection.php");
    error_reporting(0);
    
    //add error_reporting(0); to remove errors 
    $query = "SELECT * FROM students  
            LEFT JOIN process ON process_fk = process_id
            LEFT JOIN parents ON parent_fk = parent_id
            LEFT JOIN tracks ON track_fk = track_id
            LEFT JOIN strands ON strand_fk = strand_id
            ORDER BY no";
    $result = mysqli_query($dbase,$query) or die("Error2: ".mysqli_error($dbase));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> <!---how the website to display*/ -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href="img/snhsfav.png"/>
    <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<!--     <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="header">
    <center><img src="img/snhslogo.png">
    <h3> Welcome to Admin Panel</h3></center>   
</div>


<div class="nav">
    <ul>
        <li><a href="#section-view-stud">View Students</a></li>
        <li><a href="#section-search">Search Students</a></li>
        <li><a href="#section-stud-form">Get Students Form</a></li>
        <li><a href="#section-feedbacks">View Feedbacks</a></li>
        <li><a href="#" onclick="history.go(-1)">Log Out</a></li>
    </ul>
</div>

<div id="section-view-stud" class="tab-content">
    <table class="data-table">
        <thead>
            <tr>
                <th>NO</th>
                <th>LRN</th>
                <th>NAME</th>
                <th>DATE</th>
                <th>ADDRESS</th>
                <th>STRAND</th>
                <th>CP Number</th>
            </tr>
        </thead>
        <tbody>
        <?php


        if (mysqli_num_rows($result) > 0) {
   
        while($row = mysqli_fetch_assoc($result)) {
            echo ' <tr>  
                <td>'.$row["no"].'</td>
                <td>'.$row["lrn"].'</td>
                <td>'.$row["fname"].'</td>  
                <td>'.$row["date"].'</td>
                <td>'.$row["address"].'</td>
                <td>'.$row["sname"].'</td>
                <td>'.$row["cp_number"].'</td>
            </tr>';
        }
        } else {
            echo "<h3><center>No user data found!<center></h3>";
        }
        ?>

        </tbody>

    </table>
</div>

<div id="section-stud-form" class="tab-content">
<form method="POST" action="pdf.php">

    <div id="msform">
    <label>Select by LRN:</label>
    <select name="lrn">
        <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($dbase,$query) or die("Error1: ".mysqli_error($dbase));
            while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['lrn']."'>".$row['lrn']."</option>";
            }
        ?>
    </select>
    <input type="submit" class="next action-button1" value="Click here to download"></td>
    </div>
</form>

<form method="POST" action="pdf.php">
    <div id="msform">
    <label>Select by No.:</label>
    <select name="no">
        <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($dbase,$query) or die("Error1: ".mysqli_error($dbase));
            while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['no']."'>".$row['no']."</option>";
            }
        ?>
    </select>
    <input type="submit" class="next action-button1" value="Click here to download"></td>
    </div>
</form>
</div>


<div id="section-search" class="tab-content">

    <form method="POST" action="view.php">
    <div id="msform">


    <label>Search by LRN:</label>
    <input type="text" name="lrn">
    <input type="submit" name="search" class="next action-button1" value="Search">



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

</div>


<div id="section-status" class="tab-content">
<form method="POST" action="pdf.php">

    <div id="msform">
    <label>Select by LRN:</label>
    <select name="lrn">
        <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($dbase,$query) or die("Error1: ".mysqli_error($dbase));
            while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['lrn']."'>".$row['lrn']."</option>";
            }
        ?>
    </select>
    <input type="submit" class="next action-button1" value="Click here to download"></td>
    </div>
</form>

<form method="POST" action="pdf.php">
    <div id="msform">
    <label>Select by No.:</label>
    <select name="no">
        <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($dbase,$query) or die("Error1: ".mysqli_error($dbase));
            while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['no']."'>".$row['no']."</option>";
            }
        ?>
    </select>
    <input type="submit" class="next action-button1" value="Click here to download"></td>
    </div>
</form>
</div>

<div id="section-feedbacks" class="tab-content">

    <?php
    require("my_connection.php");
    error_reporting(0);
    
    //add error_reporting(0); to remove errors 
    $query1 = "SELECT * FROM feedbacks";
    $result1 = mysqli_query($dbase,$query1) or die("Error2: ".mysqli_error($dbase));
    ?>

    <table class="data-table">
        <thead>
            <tr>
                <th>NO</th>
                <th>LIKE OR DISLIKE</th>
                <th>MESSAGE</th>
            </tr>
        </thead>
        <tbody>
        <?php


        if (mysqli_num_rows($result1) > 0) {
   
        while($row = mysqli_fetch_assoc($result1)) {
            echo ' <tr>  
                <td>'.$row["feedback_id"].'</td>
                <td>'.$row["like_dislike"].'</td>
                <td>'.$row["msg"].'</td>  
            </tr>';
        }
        } else {
            echo "<h3><center>No feedback found!<center></h3>";
        }
        ?>

        </tbody>

    </table>
</div>


</body>
</html>

<script type="text/javascript">
	$(document).ready(function () {
    $('.nav ul li:first').addClass('active');
    $('.tab-content:not(:first)').hide();
    $('.nav ul li a').click(function (event) {
        event.preventDefault();
        var content = $(this).attr('href');
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        $(content).show();
        $(content).siblings('.tab-content').hide();
    });
});
	
</script>

<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat);
label {
    float: left;
    font-size: 14px;
    color: black;
}
.log-out {
    text-align: right;
    font-family: montserrat;
    color: #FFF;
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
</style>