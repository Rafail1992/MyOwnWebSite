// JavaScript Document
//set new variables
var solution_img = document.getElementById("xss_solution_image");
var btn = document.getElementById("help_btn");
var btn1 = document.getElementById("list_one");
var btn2 = document.getElementById("list_two");

$("#xss_solution_image").hide();
$("#xss_solution_label").hide();

//run the function
$(document).ready(function(){
	$('#help_btn').on('click',function(){
		$("#xss_solution_image").fadeToggle(3000);
		$("#xss_solution_label").fadeToggle(3000);
	});
});
//click to active the function


//reset the image, when we click to go back to attack page
function change_img_xss_attack(){
	
	$("#xss_solution_image").hide();
    $("#xss_solution_label").hide();
}
btn1.addEventListener('click',change_img_xss_attack,false);
btn2.addEventListener('click',change_img_xss_attack,false);

