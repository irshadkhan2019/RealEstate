<?php 
    include("includes/classes/Account.php"); 
    include("includes/Config.php"); 
    
    $account=new Account();

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
</head>
<body>
  <div id="inputContainer">
  	   <form  id="loginForm" action="register.php" method="POST">
  	   	      <h2>Login to your account</h2>
  	   	       <p> <label for="loginUsername">Username</label>
  	   	           <input id="loginUsername" type="text" name="loginUsername" placeholder="e.g.Ezuku Midoria" required>
  	   	       </p>
  	   	       <p>  <label for="loginPassword">Password</label>
  	   	       	    <input id="loginPassword" type="password" name="loginPassword" placeholder="enter pass"  required>
  	   	       </p>
  	   	     
  	   	    <button type="submit" name="loginButton">LOGIN</button>
  	   </form>

      
        <form  id="loginForm" action="register.php" method="POST">
  	   	      <h2>Register  your free account</h2>
  	   	       <p> 
  	   	       	   <?php 
  	   	       	   //if error exist get it
  	   	       	   echo $account->getError("your username must be between 5 to 25 char");
                     
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
  	   </form>

  

  </div>
</body>
</html>