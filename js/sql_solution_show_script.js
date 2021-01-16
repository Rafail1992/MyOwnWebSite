// JavaScript Document
//Hide the solution for the fourth page
$("#page_four_solution").hide();
$("#page_four_solution_2").hide();

//Toggle the solution for the fourth page
$(document).ready(function(){
	$("#help_btn").on('click',function(){
		$("#page_four_solution").fadeToggle(3000);
		$("#page_four_solution_2").fadeToggle(3000);
	})
});