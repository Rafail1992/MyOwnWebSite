// JavaScript Document
//Hide the second page
$(".page_two").hide();

//When click an element, it hides the page
$(document).ready(function(){
	$("#list_one").on('click',function(){
		$(".page_two").hide();
	});
});

//When click an element, it shows the page
$(document).ready(function(){
	$("#list_two").on('click',function(){
		$(".page_two").show();
	});
});