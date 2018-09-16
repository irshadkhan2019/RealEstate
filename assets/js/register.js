$(document).ready( function() {

	 console.log("register js is executing");
	$("#hideLogin").click(function(){
		console.log("login hide");
        $("#loginForm").hide();
        $("#registerForm").show();
	});
	$("#hideRegister").click(function(){
		console.log("Register hide");
        $("#loginForm").show();
        $("#registerForm").hide();
	});
});