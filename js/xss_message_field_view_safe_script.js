// JavaScript Document
//Create the variables
var input_message = document.getElementById("input_msg");
var view_message  = document.getElementById("view_input");
var xss_btn  = document.getElementById("xss_btn");


function viewer(){
	
	//Insert the message from the textrea to the <h3> item
	var value = input_message.value;
	value = value.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g,' ');
	view_message.innerHTML = "<span class = 'text-danger font-weight-bold' >Message: </span>" + value ;
}

//activate the function, when a user press the hack it btn

xss_btn.addEventListener('click',viewer,false);





