<?php
	
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_Pass = "";
	$DB_Name = "soilcoindc";

	$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_Pass, $DB_Name);

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}else{
		//echo "Connection successful...!";
	}

?>