// JavaScript Document
//Initialize two elements
var exercise = document.getElementById('main_page_menu');
var warning = document.getElementById('warning_msg');

//Warning message function 
function add_warning(){

//Change the content of the text
	warning.innerHTML = "Login first!";

//Scroll to the text
	warning.scrollIntoView();
	
}

//Execute the function, when the mouse is over the element
exercise.addEventListener('mouseover',function(){setTimeout(add_warning,1000)},false);

