<body>
<head>
    <meta charset="utf-8" /> <!---how the website to display*/ -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="image/png" href="img/snhsfav.png"/>
    <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<!--     <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<table class="data-table">
        <thead>
            <tr>
                <th colspan="2">This Your Details</th>
            </tr>
        </thead>
<tbody>


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
	




        if (mysqli_num_rows($result) > 0) {
   
        while($row = mysqli_fetch_assoc($result)) {
            echo ' <tr>  
                <td>No.</td>
                <td>'.$row["no"].'</td>
            	</tr>

            	<tr>  
                <td>Learner Reference Number (LRN)</td>
                <td>'.$row["lrn"].'</td>
            	</tr>

            	<tr>  
                <td>Date</td>
                <td>'.$row["date"].'</td>
            	</tr>

            	<tr>  
                <td>Full Name</td>
                <td>'.$row["fname"].'</td>
            	</tr>

            	<tr>  
                <td>Age</td>
                <td>'.$row["age"].'</td>
            	</tr>

            	<tr>  
                <td>Address</td>
                <td>'.$row["address"].'</td>
            	</tr>

            	<tr>  
                <td>Sex</td>
                <td>'.$row["sex"].'</td>
            	</tr>

            	<tr>  
                <td>Birthday</td>
                <td>'.$row["bday"].'</td>
            	</tr>

            	<tr>  
                <td>Birthplace</td>
                <td>'.$row["bplace"].'</td>
            	</tr>

            	<tr>  
                <td>Parents/Guardian</td>
                <td>'.$row["parents_guardian"].'</td>
            	</tr>

            	<tr>  
                <td>Cellphone Number</td>
                <td>'.$row["cp_number"].'</td>
            	</tr>

            	<tr>  
                <td>Occupation</td>
                <td>'.$row["occupation"].'</td>
            	</tr>


            	<tr>  
                <td>Enrollment Credentials</td>
                <td>'.$row["e_credentials"].'</td>
            	</tr>

            	<tr>  
                <td>Grade Level</td>
                <td>'.$row["grade_level"].'</td>
            	</tr>

            	<tr>  
                <td>Semester</td>
                <td>'.$row["sem"].'</td>
            	</tr>

            	<tr>  
                <td>School Last Attended</td>
                <td>'.$row["sch_last_attended"].'</td>
            	</tr>

            	<tr>  
                <td>School Year</td>
                <td>'.$row["sch_year"].'</td>
            	</tr>

            	<tr>  
                <td>School Address</td>
                <td>'.$row["sch_address"].'</td>
            	</tr>

            	<tr>  
                <td>Student Type</td>
                <td>'.$row["stud_type"].'</td>
            	</tr>

            	<tr>  
                <td>Transferred From</td>
                <td>'.$row["transferred_from"].'</td>
            	</tr>

            	<tr>  
                <td>Track</td>
                <td>'.$row["tname"].'</td>
            	</tr>

            	<tr>  
                <td>Strand</td>
                <td>'.$row["sname"].'</td>
            	</tr>


            	';
        }
        } else {
            echo "<h3><center>No user data found!<center></h3>";
        }
?>

</tbody>

</table>
</body>


<style>

*{
    margin: 0px;
    border: 0px;
}
body {
		background: #cbe1e5;
}

h3 {
    text-transform: uppercase;
    font-family: 'Ubuntu Condensed', sans-serif;
}
img{
    width: 70px;
    height: 70px;
}

.header {
    background: #10368b; /*blue*/
    color:white;
    text-align:center;
    padding:5px;
}
.nav {
    font-family: 'Ubuntu Condensed', sans-serif;
    line-height:30px;
    background-color:#eeeeee;
    height:600px;
    width:300px;
    float:left;
    padding:5px;
}
.nav.ul li{
    display: inline-block;
    padding-bottom: 10px;

}
li {
    list-style-type: none;
    text-decoration: none;
    padding-bottom: 10px;
    border-bottom: 3px solid grey;
}
li:hover {
    background: #FFF; /*darker blue*/
    color: white;
    padding-left:10px;
    -moz-transition: padding-left .3s ease-in;
    -o-transition: padding-left  .3s ease-in;
    -webkit-transition: padding-left  .3s ease-in;
    transition: padding-left  .3s ease-in;
}
a{
    color: #10368b;
    text-decoration:none;
}
.active {
    font-weight:bold;
}
.section {
    width:350px;
    float:left;
    padding:10px;
}
.footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}






        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 17px;
        }

        table td {
            transition: all .5s;
        }
        
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background: #10368b; /*blue*/
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: left;
        }

        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:nth-child(even) td {
            background-color: #dbe1e5;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
</style>