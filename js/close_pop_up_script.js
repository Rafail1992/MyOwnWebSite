// JavaScript Document
//active the button to close the pop_up window
$(document).ready(function(){
	$("#pop_up_close").on('click',function(){
		$("#pop_up_help").hide();
	});
});


//show the closed pop_up window
$(document).ready(function(){
	$("#description_btn").on('click',function(){
		$("#pop_up_help").show();
	});
});


