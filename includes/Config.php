<?php
    ob_start();//output buffering send data in pieces
    $timezone=date_default_timezone_set("Europe/Amsterdam");

    $servername = "localhost";
    $username = "root";
    $password = "pass";
    $dbname = "RealEstate";

	// Create connection
     //$con = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$con = mysqli_connect($servername, $username, $password,$dbname);
    

?>