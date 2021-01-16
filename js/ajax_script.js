// JavaScript Document

//Initialize the requests for the ajax
var request0,request1,request2,request3,request4;

//Add the buttons from the page
var btn_zero = document.getElementById("list_zero");
var btn_one = document.getElementById("list_one");
var btn_two = document.getElementById("list_two");
var btn_three = document.getElementById("list_three");
var btn_four = document.getElementById("list_four");

//ajax page zero

function ajax0(){
			
//Check the type of the browser
			if(window.XMLHttpRequest){
				request0 = new XMLHttpRequest();
			}
			else{
				request0 = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
//Execute the function after the status checking
			request0.onreadystatechange = function(){
				if(request0.readyState == 4 && request1.status == 200 ){
					
//Store the response of the request for the xml file
					var item0 = request0.responseXML;
					
// Get elements based on the tag name in the xml file
					var msg_tips_0 = item0.getElementsByTagName("tips");
					var msg_help_0 = item0.getElementsByTagName("help");
					var pop_up_help_0 = item0.getElementsByTagName("alert");
					var title_0 = item0.getElementsByTagName("instruction");
					
//Choose a specific value from the xml file
					var x0 = msg_tips_0[2].childNodes[0].nodeValue;
					var y0 = msg_help_0[2].childNodes[0].nodeValue;
					var z0 = pop_up_help_0[2].childNodes[0].nodeValue;
					var t0 = title_0[2].childNodes[0].nodeValue;
					
//Write the values to the page
					$("#tips_text_area").html(x0);
					$("#help_menu_text").html(y0);
					$("#alert_help_msg").html(z0);
					$("#title_msg").html(t0);
				}
			}
			
//Open the connection with the file and send the request
			request0.open("GET","data/page_data.xml");
			request0.send();
		}

//ajax page two



    function ajax2(){

//Check the type of the browser			
			if(window.XMLHttpRequest){
				request2 = new XMLHttpRequest();
			}
			else{
				request2 = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
//Execute the function after the status checking
			request2.onreadystatechange = function(){
				if(request2.readyState == 4 && request2.status == 200 ){
					
					var item2 = request2.responseXML;
					
// Get elements based on the tag name in the xml file
					var msg_tips_2 = item2.getElementsByTagName("tips");
					var msg_help_2 = item2.getElementsByTagName("help");
					var pop_up_help_2 = item2.getElementsByTagName("alert");
					var title_2 = item2.getElementsByTagName("instruction");
					
//Choose a specific value from the xml file	
					var x2 = msg_tips_2[1].childNodes[0].nodeValue;
					var y2 = msg_help_2[1].childNodes[0].nodeValue;
					var z2 = pop_up_help_2[1].childNodes[0].nodeValue;
					var t2 = title_2[1].childNodes[0].nodeValue;
					
//Write the values to the page
					$("#tips_text_area").html(x2);
					$("#help_menu_text").html(y2);
					$("#alert_help_msg").html(z2);
					$("#title_msg").html(t2);
					
				}
			}
			
//Open the connection with the file and send the request
			request2.open("GET","data/page_data.xml");
			request2.send();
		}

//ajax page one

    function ajax1(){
		
//Execute the function after the status checking		
			if(window.XMLHttpRequest){
				request1 = new XMLHttpRequest();
			}
			else{
				request1 = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			request1.onreadystatechange = function(){
				if(request1.readyState == 4 && request1.status == 200 ){
					
					var item1 = request1.responseXML;
					
// Get elements based on the tag name in the xml file
					var msg_tips_1 = item1.getElementsByTagName("tips");
					var msg_help_1 = item1.getElementsByTagName("help");
					var pop_up_help_1 = item1.getElementsByTagName("alert");
					var title_1 = item1.getElementsByTagName("instruction");
					
//Choose a specific value from the xml file		
					var x1 = msg_tips_1[0].childNodes[0].nodeValue;
					var y1 = msg_help_1[0].childNodes[0].nodeValue;
					var z1 = pop_up_help_1[0].childNodes[0].nodeValue;
					var t1 = title_1[0].childNodes[0].nodeValue;
					
					
					y1=y1 + "<br><span class = 'text_color_4 font-weight-bold'>&lt;button onclick = \"alert('Hacked')\"&gt;Hack me&lt;/button&gt</span>";
					
//Write the values to the page
					$("#tips_text_area").html(x1);
					$("#help_menu_text").html(y1);
					$("#alert_help_msg").html(z1);
					$("#title_msg").html(t1);
				}
			}
			
//Open the connection with the file and send the request
			request1.open("GET","data/page_data.xml");
			request1.send();
		}


//ajax page three

    function ajax3(){
		
//Execute the function after the status checking	
			if(window.XMLHttpRequest){
				request3 = new XMLHttpRequest();
			}
			else{
				request3 = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			request3.onreadystatechange = function(){
				if(request3.readyState == 4 && request3.status == 200 ){
					
					var item3 = request3.responseXML;
					
// Get elements based on the tag name in the xml file
					var msg_tips_3 = item3.getElementsByTagName("tips");
					var msg_help_3 = item3.getElementsByTagName("help");
					var pop_up_help_3 = item3.getElementsByTagName("alert");
					var title_3 = item3.getElementsByTagName("instruction");
					
//Choose a specific value from the xml file	
					var x3 = msg_tips_3[3].childNodes[0].nodeValue;
					var y3 = msg_help_3[3].childNodes[0].nodeValue;
					var z3 = pop_up_help_3[3].childNodes[0].nodeValue;
					var t3 = title_3[3].childNodes[0].nodeValue;
					
//Write the values to the page
					$("#tips_text_area").html(x3);
					$("#help_menu_text").html(y3);
					$("#alert_help_msg").html(z3);
					$("#title_msg").html(t3);
				}
			}
			
//Open the connection with the file and send the request
			request3.open("GET","data/page_data.xml");
			request3.send();
		}


//ajax page four

    function ajax4(){
		
//Execute the function after the status checking		
			if(window.XMLHttpRequest){
				request4 = new XMLHttpRequest();
			}
			else{
				request4 = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			request4.onreadystatechange = function(){
				if(request4.readyState == 4 && request4.status == 200 ){
					
					var item4 = request4.responseXML;
					
// Get elements based on the tag name in the xml file
					var msg_tips_4 = item4.getElementsByTagName("tips");
					var msg_help_4 = item4.getElementsByTagName("help");
					var pop_up_help_4 = item4.getElementsByTagName("alert");
					var title_4 = item4.getElementsByTagName("instruction");
					
//Choose a specific value from the xml file	
					var x4 = msg_tips_4[4].childNodes[0].nodeValue;
					var y4 = msg_help_4[4].childNodes[0].nodeValue;
					var z4 = pop_up_help_4[4].childNodes[0].nodeValue;
					var t4 = title_4[4].childNodes[0].nodeValue;
					
//Write the values to the page
					$("#tips_text_area").html(x4);
					$("#help_menu_text").html(y4);
					$("#alert_help_msg").html(z4);
					$("#title_msg").html(t4);
				}
			}
			
//Open the connection with the file and send the request
			request4.open("GET","data/page_data.xml");
			request4.send();
		}



//ajax activation button
	btn_zero.addEventListener("click",ajax0,false);
	btn_one.addEventListener("click",ajax1,false);
    btn_two.addEventListener("click",ajax2,false);
    btn_three.addEventListener("click",ajax3,false);
    btn_four.addEventListener("click",ajax4,false);
