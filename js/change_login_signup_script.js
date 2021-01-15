// JavaScript Document
$(document).ready(function(){
	$("#log_in_click").on('click',function(){
		
		$("#signup_jumbo").removeClass("d-block");
		$("#signup_jumbo").addClass("d-none");
		$("#login_jumbo").removeClass("d-none");
		$("#login_jumbo").addClass("d-block");
		
	});
	
	$("#sign_up_click").on('click',function(){
		
		$("#login_jumbo").removeClass("d-block");
		$("#login_jumbo").addClass("d-none");
		$("#signup_jumbo").removeClass("d-none");
		$("#signup_jumbo").addClass("d-block");
		
	});
});
