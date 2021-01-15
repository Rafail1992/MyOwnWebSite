// JavaScript Document
$(window).on('load',function(){
	var width = $(window).innerWidth();
	$(".img_carousel").css("width",width);
});

$(window).resize(function(){
	var width = $(window).innerWidth();
	$(".img_carousel").css("width",width);
});



