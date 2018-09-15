<?php
    ob_start();//output buffering send data in pieces
    $timezone=date_default_timezone_set("Europe/Amsterdam");

    $servername = "localhost";
    $username = "root";
    $password = "pass";
    $dbname = "RealEstate";

	// Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 

?>