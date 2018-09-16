<?php 
    include("includes/classes/Account.php"); 
    include("includes/classes/Constants.php"); 
    include("includes/Config.php"); 

    
    $account=new Account();
    //pass $con var to account
    $account->con($con);
   

    include("includes/handlers/register-handler.php"); //copies all code and paste below
    include("includes/handlers/login-handler.php"); 

    function getInputValue($name){

    	if(isset($_POST[$name])){
    		echo $_POST[$name];
    	}
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to RealEstate</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css ">
     <script
  		src="https://code.jquery.com/jquery-3.3.1.js"
  		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  		crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="assets/js/register.js"></script>
</head>
<body>
       <?php //show register form when reg button pressed
         if(isset($_POST['registerButton'])){
         	
         	echo '<script>
         	   $(document).ready( function() {

		 			$("#loginForm").hide();
	        	$("#registerForm").show();
		
		
				});

	        </script>';
         }
         else{

         	echo '<script>
         	   $(document).ready( function() {

		 		$("#loginForm").show();
	        	$("#registerForm").hide();
		
	          )};

	        </script>';
         }
  
       ?>
     <script >//hide show login and register forms
	     	$(document).ready( function() {

		 $("#loginForm").show();
	        $("#registerForm").hide();
		
	});
     </script>

	<div id="background">
		<div id="loginContainer">
		    <div id="inputContainer">
		  	   <form  id="loginForm" action="register.php" method="POST">
		  	   	      <h2>Login to your account</h2>
		  	   	       <p> 
		                   <?php echo $account->getError( Constants::$loginFailed); ?>
		  	   	       	   <label for="loginUsername">Username</label>
		  	   	           <input id="loginUsername" type="text" name="loginUsername" placeholder="e.g.Ezuku Midoria" required>
		  	   	       </p>
		  	   	       <p>  <label for="loginPassword">Password</label>
		  	   	       	    <input id="loginPassword" type="password" name="loginPassword" placeholder="enter pass"  required>
		  	   	       </p>
		  	   	     
		  	   	    <button type="submit" name="loginButton">LOG IN</button>

		  	   	    <div class="hasAccountText">
		  	   	    	 <span id="hideLogin">Don't have an account yet? Sign Up here</span>
		  	   	    </div>
		  	   </form>

		      
		        <form  id="registerForm" action="register.php" method="POST">
		  	   	      <h2>Register  your free account</h2>
		  	   	       <p> 
		  	   	       	   <?php 
		  	   	       	   //if error exist get it
		  	   	       	   echo $account->getError("your username must be between 5 to 25 char");
		  	   	       	   echo $account->getError(Constants::$usernameTaken);
		                     
		  	   	       	   ?> 
		  	   	       	   <label for="registerUsername">Username</label>
		  	   	           <input id="registerUsername" type="text" name="registerUsername" placeholder="e.g.Ezuku Midoria" value="<?php getInputValue('registerUsername') ?>" required  >
		  	   	       </p>
		  	   	       <p> 
		  	   	       	   <?php echo $account->getError("your firstname must be between 2 to 25 char");?>
		  	   	       	   <label for="firstName">First Name</label>
		  	   	           <input id="firstName" type="text" name="firstName" placeholder="e.g.Ezuku Midoria" value="<?php getInputValue('firstName') ?>"required>
		  	   	       </p>
		  	   	       <p> 
		                   <?php echo $account->getError("your lastname must be between 2 to 25 char");?>
		  	   	       	   <label for="lastName">Last Name</label>
		  	   	           <input id="lastName" type="text" name="lastName" placeholder="e.g.Ezuku Midoria"value="<?php getInputValue('lastName') ?>" required>
		  	   	       </p>
		  	   	       <p> 
		                    <?php echo $account->getError("your Email doesnt match");?>
		                    <?php echo $account->getError("Email is invalid");?>
		                    <?php echo $account->getError(Constants::$emailTaken); ?>
		  	   	       	   <label for="email">Email</label>
		  	   	           <input id="email" type="text" name="email" placeholder="e.g.Ezuku@Midoria.com"  value="<?php getInputValue('email') ?>" required>
		  	   	       </p>
		  	   	        <p>
		                   
		  	   	           <label for="email2">Conform Email</label>
		  	   	           <input id="email2" type="text" name="email2" placeholder="e.g.Ezuku@Midoria.com" required>
		  	   	       </p>

		  	   	       <p>  
		                    <?php echo $account->getError("password don't match");?>
		                     <?php echo $account->getError("passwords can only contains number and letters");?>
		                      <?php echo $account->getError("your password must be between 5 to 25 char");?>
		  	   	       	    <label for="registerPassword">Password</label>
		  	   	       	    <input id="registerPassword" type="password" name="registerPassword" placeholder="your pass" required>
		  	   	       </p>
		  	   	        <p>  <label for="registerPassword2">Conform Password</label>
		  	   	       	    <input id="registerPassword2" type="password" name="registerPassword2" placeholder="your pass" required>
		  	   	       </p>
		  	   	     
		  	   	    <button type="submit" name="registerButton">Sign up</button>
		  	   	     <div class="hasAccountText">
		  	   	    	 <span id="hideRegister">Have an account! Sign In here</span>
		  	   	    </div>
		  	   </form>

            </div>
            	<div id="loginText">
            	<h1>Great Houses available for rent and purchase</h1>
            	<ul>
            	  <li> Variety of choices available</li>
            	  <li> GO Ahead Pick One!!!!</li>	
            	</ul>	
            	
            	</div>
        </div>
    </div>
</body>
</html>