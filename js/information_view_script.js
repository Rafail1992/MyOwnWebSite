// JavaScript Document

//Hide the information message
$("#information_msg").hide();


//option1
//show the information message when you hover with the mouse over the help button
$("#help_btn").on("mouseover",function(){
	
	//show function activated
	$("#information_msg").show();
	
	//insert the message into the information area
	$("#inner_information_msg").html("If you press this button, there will be a pop-up area with the solution.");
});

//when the mouse leaves this area, the message is hidden and the text is restored
$("#help_btn").on("mouseout",function(){
	$("#information_msg").hide();
	//reset the message
	$("#inner_information_msg").html("");
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//option2
//show the information message when you hover with the mouse over the text area
$("#input_msg").on("mouseover",function(){
	
	//show function activated
	$("#information_msg").show();
	
	//insert the message into the information area
	$("#inner_information_msg").html("From here, you can launch your attacks!");
});

//when the mouse leaves this area, the message is hidden and the text is restored
$("#input_msg").on("mouseout",function(){
	$("#information_msg").hide();
	//reset the message
	$("#inner_information_msg").html("");
});


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//option3
//show the information message when you hover with the mouse over the text area
$("#xss_btn").on("mouseover",function(){
	
	//show function activated
	$("#information_msg").show();
	
	//insert the message into the information area
	$("#inner_information_msg").html("Press to Hack the site!");
});

//when the mouse leaves this area, the message is hidden and the text is restored
$("#xss_btn").on("mouseout",function(){
	$("#information_msg").hide();
	//reset the message
	$("#inner_information_msg").html("");
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//option4
//show the information message when you hover with the mouse over the text area
$("#tips_menu").on("mouseover",function(){
	
	//show function activated
	$("#information_msg").show();
	
	//insert the message into the information area
	$("#inner_information_msg").html("Here are some tips and information. With those, you can complete the exercise. Read the whole text.");
});

//when the mouse leaves this area, the message is hidden and the text is restored
$("#tips_menu").on("mouseout",function(){
	$("#information_msg").hide();
	//reset the message
	$("#inner_information_msg").html("");
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//option5
//show the information message when you hover with the mouse over the text area
$("#help_menu").on("mouseover",function(){
	
	//show function activated
	$("#information_msg").show();
	
	//insert the message into the information area
	$("#inner_information_msg").html("Here is the solution to this exercise.");
});

//when the mouse leaves this area, the message is hidden and the text is restored
$("#help_menu").on("mouseout",function(){
	$("#information_msg").hide();
	//reset the message
	$("#inner_information_msg").html("");
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//option6
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#xss_solution_image").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here is the new code of the page.<br> You can click the image to zoom in and double click to zoom out.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#xss_solution_image").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//option7
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#description_btn").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Click here to see how to use this page.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#description_btn").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//option8
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#xss_vul_image").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here is the vulnerable code of the page.<br> You can click the image to zoom in and double click to zoom out.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#xss_vul_image").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//option9
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#log_out").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Click this button to log out.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#log_out").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//option10
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#title").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here is the exercise description.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#title").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//option11
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#sql_form").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here you can perform an SQL Injection.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#sql_form").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//option11
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#input_sql_msg").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here you can change the PHP code of the form.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#input_sql_msg").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});

//option12
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#reset_sql_btn").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Reset the PHP code of the form.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#reset_sql_btn").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});



//option13
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#sql_solution_img").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here is the safe code for the form.<br> You can click the image to zoom in and double click to zoom out.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#sql_solution_img").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});

//option14
//show the information message when you hover with the mouse over the text area

$(document).ready(function(){
	$("#page_four_solution_2").on("mouseover",function(){
		
//show function activated
	$("#information_msg").show();
	
//insert the message into the information area
	$("#inner_information_msg").html("Here you can perform an SQL Injection.");
    });
});

$(document).ready(function(){
//when the mouse leaves this area, the message is hidden and the text is restored
   $("#page_four_solution_2").on("mouseout",function(){
   $("#information_msg").hide();
//reset the message
   $("#inner_information_msg").html("");
   });
});
