// JavaScript Document
$(document).ready(function(){
	
	//Hide the help menu
	
	$("#help_menu").hide();
	
	$("#help_btn").on("click",function(){
	
		//hide and show the help menu when you press a button
		
		$("#help_menu").fadeToggle(3000);
	
	});
});

