// JavaScript Document
//Hide the close button of the images
$("#close_btn_1").hide();
$("#close_btn_2").hide();
$("#close_btn_3").hide();

//change the color of the division
$("#close_btn_div_1").removeClass("item_color");
$("#close_btn_div_2").removeClass("item_color");
$("#close_btn_div_3").removeClass("item_color");

//image 1

$(document).ready(function(){
	
//Full screen zoom
	$("#xss_vul_image").on("click",function(){
		$("#left_sidebar_div").hide();
		$("#right_sidebar_div").hide();
		$("#title").hide();
		$("#img_description_1").hide();
		$("#main_div").removeClass('col-xl-6');
		$("#main_div").addClass('col-xl-12');
		$("#close_btn_1").show();
		$("#close_btn_div_1").addClass("item_color");
		
//Check which image is visible
		if(("#xss_solution_image").is(":visible")){
			$("#xss_solution_image").show();
			$("#xss_solution_label").show();
		}
		else{
			$("#xss_solution_image").hide();
			$("#xss_solution_label").hide();
		}
		
	});

//Close the image with dbclick
	$("#xss_vul_image").dblclick(function(){
		$("#left_sidebar_div").show();
		$("#right_sidebar_div").show();
		$("#title").show();
		$("#img_description_1").show();
		$("#main_div").removeClass('col-xl-12');
		$("#main_div").addClass('col-xl-6');
		$("#close_btn_1").hide();
		$("#close_btn_div_1").removeClass("item_color");
		
//Check which image is visible
		if(("#xss_solution_image").is(":visible")){
			$("#xss_solution_image").show();
			$("#xss_solution_label").show();
		}
		else{
			$("#xss_solution_image").hide();
			$("#xss_solution_label").hide();
		}
	});
	
//Close the image with button	
	$("#close_btn_1").click(function(){
		$("#left_sidebar_div").show();
		$("#right_sidebar_div").show();
		$("#title").show();
		$("#img_description_1").show();
		$("#main_div").removeClass('col-xl-12');
		$("#main_div").addClass('col-xl-6');
		$("#close_btn_1").hide();
		$("#close_btn_div_1").removeClass("item_color");

//Check which image is visible		
		if(("#xss_solution_image").is(":visible")){
			$("#xss_solution_image").show();
			$("#xss_solution_label").show();
		}
		else{
			$("#xss_solution_image").hide();
			$("#xss_solution_label").hide();
		}
	});
	
//image 2
	
//Full screen zoom
	$("#xss_solution_image").click(function(){
		$("#xss_solution_label").hide();
		$("#left_sidebar_div").hide();
		$("#right_sidebar_div").hide();
		$("#title").hide();
		$("#img_description_1").hide();
		$("#main_div").removeClass('col-xl-6');
		$("#main_div").addClass('col-xl-12');
		$("#close_btn_2").show();
		$("#xss_vul_image").hide();
		$("#close_btn_div_2").addClass("item_color");
	});
	
//Close the image with dbclick		
	$("#xss_solution_image").dblclick(function(){
		$("#xss_solution_label").show();
		$("#left_sidebar_div").show();
		$("#right_sidebar_div").show();
		$("#title").show();
		$("#img_description_1").show();
		$("#main_div").removeClass('col-xl-12');
		$("#main_div").addClass('col-xl-6');
		$("#close_btn_2").hide();
		$("#xss_vul_image").show();
		$("#close_btn_div_2").removeClass("item_color");
	});


//Close the image with button
	$("#close_btn_2").click(function(){
		$("#xss_solution_label").show();
		$("#left_sidebar_div").show();
		$("#right_sidebar_div").show();
		$("#title").show();
		$("#img_description_1").show();
		$("#main_div").removeClass('col-xl-12');
		$("#main_div").addClass('col-xl-6');
		$("#close_btn_2").hide();
		$("#xss_vul_image").show();
		$("#close_btn_div_2").removeClass("item_color");
	});
	
//image 3
//Full screen zoom	
	$("#sql_solution_img").click(function(){
		
		$("#left_sidebar_div").hide();
		$("#right_sidebar_div").hide();
		$("#title").hide();
		$("img_description_2").hide();
		$("#main_div").removeClass('col-xl-6');
		$("#main_div").addClass('col-xl-12');
		$("#close_btn_3").show();
		$("#safe_sql_form").hide();
		$("#form_item_1").hide();
		$("#img_description_2").hide();
		$("#page_four_solution_2").removeClass('border-light');
		$("#page_four_solution_2").removeClass('item_color');
		$("#page_four_solution_2").removeClass("item_shadow");
		$("#close_btn_div_3").addClass("item_color");
	});
	
	//Close the image with dbclick
	$("#sql_solution_img").dblclick(function(){
		
		$("#left_sidebar_div").show();
		$("#right_sidebar_div").show();
		$("#title").show();
		$("#img_description_2").show();
		$("#main_div").removeClass('col-xl-12');
		$("#main_div").addClass('col-xl-6');
		$("#close_btn_3").hide();
		$("#safe_sql_form").show();
		$("#form_item_1").show();
		$("#img_description_2").show();
		$("#page_four_solution_2").addClass('border-light');
		$("#page_four_solution_2").addClass('item_color');
		$("#page_four_solution_2").addClass("item_shadow");
		$("#close_btn_div_3").removeClass("item_color");
	});
	
	//Close the image with button
	$("#close_btn_3").click(function(){
		
		$("#left_sidebar_div").show();
		$("#right_sidebar_div").show();
		$("#title").show();
		$("#img_description_2").show();
		$("#main_div").removeClass('col-xl-12');
		$("#main_div").addClass('col-xl-6');
		$("#close_btn_3").hide();
		$("#safe_sql_form").show();
		$("#form_item_1").show();
		$("#img_description_2").show();
		$("#page_four_solution_2").addClass('border-light');
		$("#page_four_solution_2").addClass('item_color');
		$("#page_four_solution_2").addClass("item_shadow");
		$("#close_btn_div_3").removeClass("item_color");
		
	});
	
});