// JavaScript Document
$(document).ready(function(){
	
//Execute the function after the user click the button
	$("#log_in_click").on('click',function(){
	    
//Hide Sign up section and show log in section
		$("#signup_jumbo").removeClass("d-block");
		$("#signup_jumbo").addClass("d-none");
		$("#login_jumbo").removeClass("d-none");
		$("#login_jumbo").addClass("d-block");
		
	});
	
//Execute the function after the user click the button
	$("#sign_up_click").on('click',function(){

//Hide log in section and show sign up section
		$("#login_jumbo").removeClass("d-block");
		$("#login_jumbo").addClass("d-none");
		$("#signup_jumbo").removeClass("d-none");
		$("#signup_jumbo").addClass("d-block");
		
	});
});
