<?php

 if(isset($_POST['loginButton'])){
	//login button was pressed
    $username=$_POST['loginUsername'];
    $password=$_POST['loginPassword'];

    //check if un apd pw r correct

    $result= $account->login($username,$password);

    if($result ==true){
    	header("Location:index.php");
    }
	
}

?>
