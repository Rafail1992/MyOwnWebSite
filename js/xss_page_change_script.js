// JavaScript Document
//hide the page two content
$("#page_two").hide();
$("#page_one").hide();
$("#page_three").hide();
$("#page_four").hide();
$("#page_four_solution").hide();
$("#page_four_solution_2").hide();



$(document).ready(function(){
	$("#list_one").on('click',function(){
	
//when we click to the attack page, its close the other pages and shows the attack page
		$("#page_zero").hide();
		$("#page_one").show();
		$("#page_two").hide();
		$("#page_three").hide();
		$("#page_four").hide();
		$("#help_menu").hide();
		$("#page_four_solution").hide();
		$("#page_four_solution_2").hide();
        $("#sql_script").remove();
        
	});
});

/////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
	$("#list_two").on('click',function(){

//when we click to the solution page, its close the other pages and shows the solution page
		$("#page_zero").hide();
		$("#page_one").hide();
		$("#page_two").show();
		$("#page_three").hide();
		$("#page_four").hide();
		$("#help_menu").hide();
		$("#page_two").removeClass("p-5");
		$("#page_four_solution").hide();
        $("#sql_script").remove();
		
	});
});

//////////////////////////////////////////////////////////////////////////////////////////////////////

// Load Instruction page

$(document).ready(function(){
	$("#list_zero").on('click',function(){

//when we click to the solution page, its close the other pages and shows the solution page
		
		$("#page_zero").show();
		$("#page_one").hide();
		$("#page_two").hide();
		$("#page_three").hide();
		$("#page_four").hide();
		$("#help_menu").hide();
		$("#page_four_solution").hide();
		$("#page_four_solution_2").hide();
        $("#sql_script").remove();
	});
});

/////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
	$("#list_three").on('click',function(){

//when we click to the solution page, its close the other pages and shows the solution page
		
		$("#page_zero").hide();
		$("#page_two").hide();
		$("#page_one").hide();
		$("#page_three").show();
		$("#page_four").hide();
		$("#help_menu").hide();
		$("#page_four_solution").hide();
		$("#page_four_solution_2").hide();
        $("#sql_script").remove();
	});
});

////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
	$("#list_four").on('click',function(){

//when we click to the solution page, its close the other pages and shows the solution page
		
		$("#page_zero").hide();
		$("#page_two").hide();
		$("#page_one").hide();
		$("#page_three").hide();
		$("#page_four").show();
		$("#help_menu").hide();
		$("#page_four_solution").hide();
		$("#page_four_solution_2").hide();
        $("#sql_script").remove();
	});
});