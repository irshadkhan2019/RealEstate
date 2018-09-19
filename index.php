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

<div id="nowPlayingBarContainer">
    <div id="nowPlayingBar">
        <div id="nowPlayingLeft">
          
        </div>
        <div id="nowPlayingCenter">
           <div class="content playerControls">
               <div class="button">
                 
                  <button class="controlButton shuffle" title="Shuffle Button" alt="Shuffle">
                      <img src="assets/images/icons/shuffle.png">
                   </button>
                    <button class="controlButton previous" title="previous Button" alt="previous">
                      <img src="assets/images/icons/previous.png">
                   </button>

                    <button class="controlButton play" title="play Button" alt="play">
                      <img src="assets/images/icons/play.png">
                   </button>
                   <button class="controlButton pause" title="pause Button" alt="pause" style="display: none">
                      <img src="assets/images/icons/pause.png">
                   </button>

                    <button class="controlButton next" title="next Button" alt="next">
                      <img src="assets/images/icons/next.png">
                   </button>
                    <button class="controlButton repeat" title="repeat Button" alt="repeat">
                      <img src="assets/images/icons/repeat.png">
                   </button>
                 
               </div>
               <div class="playbackBar">
              <span class="progressTime current">0.00</span>
              <div  class="progressBar">
                <div class="progressBarBg">
                   <div class="progress">
                     
                   </div>
                  
                </div>
              </div>
              <span class="progressTime remaining">0.00</span>
                 
               </div>
             
           </div>
          
        </div>
        <div id="nowPlayingRight">
          
        </div>
    </div>
</div>
</body>
</html>