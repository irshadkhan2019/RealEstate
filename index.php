<?php 
   include("includes/config.php");//as sessionstart in config..
//if session is set then only display page
   if(isset($_SESSION['userLoggedIn'])){
   	$userLoggedIn= $_SESSION['userLoggedIn'];//store username  in userloggedin
       }
   
   	else{
   		//if session not set then
   		header("Location:register.php");
   	}
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>RealEstate</title>
</head>
<body>
 <?php  
  echo "hello";
 ?>
</body>
</html>