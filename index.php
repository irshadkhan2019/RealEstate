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
	<title>My App</title>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
<div id="mainContainer">

   <div id="topContainer">
      <?php include("includes/navBarContainer.php");?>


   </div>
   <?php include("includes/nowPlayingBar.php");?>
   
</div>


</body>
</html>