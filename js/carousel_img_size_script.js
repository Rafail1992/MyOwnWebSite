// JavaScript Document
//Execute the function, when the window load
$(window).on('load',function(){
	
//Store the width of the window
	var width = $(window).innerWidth();
	
//Change the carousel image size
	$(".img_carousel").css("width",width);
});

//Execute the function, when the window resized
$(window).resize(function(){
	
//Store the width of the window
	var width = $(window).innerWidth();

//Change the carousel image size
	$(".img_carousel").css("width",width);
});



