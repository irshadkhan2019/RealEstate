<?php 
    include("includes/classes/Account.php"); 
    
    $account=new Account();
  
    include("includes/handlers/register-handler.php"); 
    include("includes/handlers/login-handler.php"); 
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
  	   	       <p> <label for="registerUsername">Username</label>
  	   	           <input id="registerUsername" type="text" name="registerUsername" placeholder="e.g.Ezuku Midoria" required>
  	   	       </p>
  	   	       <p> <label for="firstName">First Name</label>
  	   	           <input id="firstName" type="text" name="firstName" placeholder="e.g.Ezuku Midoria" required>
  	   	       </p>
  	   	       <p> <label for="lastName">Last Name</label>
  	   	           <input id="lastName" type="text" name="lastName" placeholder="e.g.Ezuku Midoria" required>
  	   	       </p>
  	   	       <p> <label for="email">Email</label>
  	   	           <input id="email" type="text" name="email" placeholder="e.g.Ezuku@Midoria.com" required>
  	   	       </p>
  	   	        <p> <label for="email2">Conform Email</label>
  	   	           <input id="email2" type="text" name="email2" placeholder="e.g.Ezuku@Midoria.com" required>
  	   	       </p>

  	   	       <p>  <label for="registerPassword">Password</label>
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