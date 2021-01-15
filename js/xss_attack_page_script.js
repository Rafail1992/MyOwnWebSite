// JavaScript Document
$(".page_two").hide();

$(document).ready(function(){
	$("#list_one").on('click',function(){
		$(".page_two").hide();
	});
});

$(document).ready(function(){
	$("#list_two").on('click',function(){
		$(".page_two").show();
	});
});