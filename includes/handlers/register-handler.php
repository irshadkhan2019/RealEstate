<?php 
function FormUsername($inputText){//for username
	$inputText=strip_tags($inputText);//only text 
	$inputText=str_replace(" ", "", $inputText);//replace space with nospace @!!@!
    return $inputText;
}
function FormUserString($inputText){//for Others 
	$inputText=strip_tags($inputText);//only text 
	$inputText=str_replace(" ", "", $inputText);//replace space with nospace @!!@!
    $inputText=ucfirst(strtolower($inputText));//first char upper and other lower
    return $inputText;
}

function FormPassword($inputText){//for password
	$inputText=strip_tags($inputText);//only texts
	
    return $inputText;
}

if(isset($_POST['loginButton'])){
	//login button was pressed
	
}
if(isset($_POST['registerButton'])){
	//login button was pressed
	$username= FormUsername($_POST['registerUsername']);
	
	$firstName= FormUserString($_POST['firstName']);

	$lastName= FormUserString($_POST['lastName']);

	$email= FormUserString($_POST['email']);

	$email2= FormUserString($_POST['email2']);

	$password= FormPassword($_POST['registerPassword']);

	$password2= FormPassword($_POST['registerPassword2']);
	

}


?>

