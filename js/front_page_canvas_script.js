// JavaScript Document
var canvas = document.getElementById("msg_canvas");
var width  = canvas.width;
var height = canvas.height;

width = width/2;
height = height/2;

canvas.scrollIntoView;

$("#width").html(width);
$("#height").html(height);
var ctx = canvas.getContext("2d");

var x = 50;
var y = 100;




function msg_animation(){
	  
	var scroll_height = window.scrollY;
	  
	  if(scroll_height > 800){
		  
		  if(x<700){
			  
	          ctx.clearRect(0,0,1000,400);
			  ctx.fillStyle="ghostwhite";
              ctx.font = "30px Arial ";
              ctx.fillText("Thank you!!!", x, y);
			  ctx.font = "20px Arial ";
			  
			  ctx.shadowOffsetX = 5;
              ctx.shadowOffsetY = 3;
              ctx.shadowBlur = 3;
              ctx.shadowColor = "black";
			  
			  ctx.fillText("I spent a lot of time", x, y+50);
			  ctx.fillText("to create this website,", x, y+75);
			  ctx.fillText("but I am really happy,", x, y+100);
			  ctx.fillText("because by creating", x, y+125);
			  ctx.fillText("this, I learned a lot", x, y+150);
			  ctx.fillText("of new things.", x, y+175);

	          x+=10;
	          return x;
	      }
		 
	   }
	
}




document.addEventListener("scroll",function(){setInterval(msg_animation,200)},false);

