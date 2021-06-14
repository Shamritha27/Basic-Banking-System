<?php
	$servername = 'sql6.freesqldatabase.com';
	$user = 'sql6418975';
	$pass = 'V5IRqBQbI9';
	$dbname = 'sql6418975';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}


?>