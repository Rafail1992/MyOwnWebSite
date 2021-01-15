// JavaScript Document

$("#page_four_solution").hide();
$("#page_four_solution_2").hide();

$(document).ready(function(){
	$("#help_btn").on('click',function(){
		$("#page_four_solution").fadeToggle(3000);
		$("#page_four_solution_2").fadeToggle(3000);
	})
});