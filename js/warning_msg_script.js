// JavaScript Document

	
	//$("#pop_up_help").hide();
	
	/*$("#main_page_menu").on("click",function(){
		
		$("#warning_msg").html("Login first!");
		var warning = document.getElementById('warning_msg');
		warning.scrollIntoView();
	});*/

var exercise = document.getElementById('main_page_menu');
var warning = document.getElementById('warning_msg');

function add_warning(){
	warning.innerHTML = "Login first!";
	warning.scrollIntoView();
	
}

exercise.addEventListener('mouseover',function(){setTimeout(add_warning,1000)},false);

