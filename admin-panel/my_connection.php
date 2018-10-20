<?php

	$mysql_db = 'online_assessment';
	// $dbase = mysqli_connect("localhost","root","") or die("Couldn't Connect".mysqli_error());
	// mysqli_select_db($dbase,$mysql_db) or die("Couldn't Connect".mysqli_error());

	$dbase = mysqli_connect("localhost","root","");
	if (!$dbase || !mysqli_select_db($dbase,$mysql_db))
	{
		die("Couldn't Connect".mysqli_error());
	}

?>