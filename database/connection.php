<?php
    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "orangehrm";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die ('Error connecting to mysql');
?>