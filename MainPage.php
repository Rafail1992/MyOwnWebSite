<?php
#Start the session
    session_start();
    $_SESSION['alert']="Login first!";
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Login first!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
 
#Check if the user is logged in. 
    if(!$_SESSION['id']){
	header('location:index.php');

    exit;
    }
    

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width = device-width, initial-scale=1">
<title>Vulnerability Guide</title>

<!--Insert bootstrap framework CDN-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
<!--Basic Page Style-->	
	
	<link rel="stylesheet" href="css/style.css">

</head>

<body >
<!--Main Container-->
	
	<div id = "container" class="container-fluid">
		
<!--Navigation bar division-->

<!--Open Navigation Row-->

		<div class = "row" >
			
<!--Left Navigation Bar-->
			
			<div id="navbar1" class="col-6 col-md-10 item_color border-light border-right-0 ">
				
				
				<nav class="navbar navbar-expand-xl ">
					
					<button id="toggle_menu" class = "navbar-toggler form-control bg-light" type = "button" data-toggle="collapse" data-target="#collapse_navbar" style="width:60px; margin-top: 5px;">
						<span class="fas fa-bars"></span>
					</button>
					
					<div class = "col-8 col-md-4 collapse navbar-collapse" id = "collapse_navbar">
						<ul class="navbar-nav nav-tabs">
<!-- Help button-->         
                            <li class="nav-item "><a href="index.php" class="nav-link  text_color_1 font-weight-bold">Home</a></li>
                            <li class="nav-item "><a href="cv_page.php" class="nav-link  text_color_1 font-weight-bold">Biography</a></li>
							<li id="help_btn" class="nav-item "><a href="#" class="nav-link  text_color_1 font-weight-bold">Solution</a></li>
						    <li id="description_btn" class="nav-item"><a href="#pop_up_help" class="nav-link  text_color_1 font-weight-bold">Description</a></li>
                            
				        </ul>
			        </div>
                    <div  class =" col-4 col-md-8 mt-3 d-none d-xl-block">
                            <h5 class ="d-flex justify-content-end text_color_1 d-none ">USER: <span class ="badge badge-warning ml-3"><?php echo strtoupper($_SESSION['name']);?><span></h5>
                    </div>
                    
			    </nav>
				
			</div>

<!--Right Navigation Bar-->
			
			<div id="navbar2" class="col-6 col-md-2 item_color border-light border-left-0 ">
				
				<nav class="navbar navbar-expand justify-content-end border-light">
					<ul class ="navbar-nav nav-tabs">
						<li id="log_out" class="nav-item"><a href="pages/Log_Out_Function.php" class="nav-link text_color_1 font-weight-bold ">Log out</a></li>
					</ul>
				</nav>
				
			</div>
			
<!--Close Navigation Row-->
			
		</div>
		
<!--Left Bar Menu-->	
<!--Open Main Row--->	
		
		<div class="row mt-5 mb-5">
	
			<div id="left_sidebar_div" class="col-xl-2">
				
				
<!--Add a navigation for the side bar options-->
				
				<div id = "xss_div_left_sidebar" class=" pt-5 pb-5  ">
					<ul class="nav flex-column nav-tabs item_shadow">
						<li id="list_zero" class="nav-item item_color "><a href="#" class="nav-link  text_color_3 font-weight-bold">Instructions</a></li>
						<li id="list_one" class="nav-item item_color "><a href="#" class="nav-link  text_color_3 font-weight-bold ">Launch an XSS Attack</a></li>
				        <li id="list_two" class="nav-item item_color "><a href="#" class="nav-link  text_color_3 font-weight-bold">Prevent an XSS Attack</a></li>
						<li id="list_three" class="nav-item item_color "><a href="#" class="nav-link  text_color_3 font-weight-bold">SQL injection</a></li>
						<li id="list_four" class="nav-item item_color "><a href="#" class="nav-link  text_color_3 font-weight-bold">Prevent an SQL injection</a></li>
				    </ul>
				</div>
				
<!--Add dscription from for the page-->
					
				
				
				<div id="information_msg" class="alert mt-4  alert-info item_shadow ">
					   <div id="inner_information_msg" class="form-control alert alert-info " rows="3"></div>
				</div>
			</div>
			
			
			
<!--Main Page-->
			
			<div id="main_div" class="col-xl-6">

<!--Main XSS Attack body-->
				
				<div id="xss_div_body" class="p-xl-5  ">
					
					<div id="title" class="pb-4">
						<h1 class ="form-control item_color text_color_2 font-weight-bold item_shadow" >Exercise Description</h1>
						<p id = "title_msg" class ="form-control item_color text-light font-weight-bold item_shadow">Instructions</p>
					</div>

<!--Instraction Page-->
					
				    <div id="page_zero">
						<h4 class ="form-control item_color text_color_2 font-weight-bold item_shadow">Here are some instructions, read them carefully!
					    </h4>
						<p  class="form-control item_color text-light item_shadow">
This is a page that contains exercises about web application
vulnerabilities. There are some scenarios like XSS attacks
and SQL injections for the users to play with.<br>
<br>
The user can choose an exercise from the sidebar on the left.
The user can use the tips on the right or press the Solution
button at the top on the page. By clicking the solution button
there will be a pop-up window at the bottom right corner 
of the page.<br>
<br>
With the tips, you take some instructions for the right way
to solve every exercise. They are different from page to page.
The user can also hover with the mouse over different items
like buttons and text areas to check for their usage.<br>
<br>
There is also a description button right next to the solution
button with which the user can read how the page works.
The description is preloaded and the user can close it with
the "x" button. You can load the window again with the
description button as it mentions before.


						</p>
					</div>
					
<!--End of instruction page-->					
					
<!--Form item-->   <div id="page_one">
					<form id = "form_item" class = "form-group ">
						<label class="form-control font-weight-bold item_color text_color_2 item_shadow">This is an Input for XSS Attacks</label>
						<textarea id = "input_msg" class="form-control item_color_text bg-secondary item_shadow text-light" rows="10"></textarea>
					    <button type="button" id = "xss_btn" class="btn btn-light text-light mt-3 item_color font-weight-bold item_shadow" >Hack it</button>
					</form>
					
					
<!--Show msg division-->
				
				   <div id="text_viewer" class="item_shadow">
					   <h4 class="form-control text_color_4 font-weight-bold item_color ">This is the message you wrote before</h4>
					   <h4 id="view_input" class="text-light item_color form-control "></h4>
				   </div>
				  </div>
<!--End of first page-->

<!--Second page loaded images-->

					<div id = "page_two" class="">
						
<!--Load the vulnerable code image-->	
				        <div id = "page_two_1 " class='form-group' >
							
												<label id="img_description_1" class = 'form-control font-weight-bold item_color text_color_2 item_shadow'>This is the vulnerable code</label>
							
							<div id="close_btn_div_1" class="alert item_color ">
								<button id = "close_btn_1"class="close mb-3 text-light item_color" type = "button">&times;</button>
								<img id='xss_vul_image' class = 'form-control item_color item_shadow' src="items/xss_vul_code.png" alt='img1' >
							</div>
						</div>

<!--Load the protected code image-->						
						<div id = "page_two_2 " class='form-group ' >
							
							<label id="xss_solution_label" class = 'form-control font-weight-bold mt-5 item_color text_color_2 item_shadow'>This is the protected code</label>
	
							<div id="close_btn_div_2"  class="alert  close_btn_div item_color">
								<button id = "close_btn_2" class="close mb-3 text-light close_btn item_color" type = "button">&times;</button>
								<img id='xss_solution_image' class = 'form-control item_color item_shadow' src="items/xss_safe_code.png" alt='img2' >
							</div>
							
							
						</div>
						
<!--End of second page-->						
				    </div> 
					
<!--Third page loaded-->
					<div id="page_three" class='form-group  item_color p-4 mb-5 border-light item_shadow' >

<!--Login form, for SQL injection-->						
						<form id="sql_form" action="pages/sql_injection_page.php" method="post" >
							<label class="form-control text-light item_color item_shadow">User ID:</label>
					        <input id="user_id" name="user_id" type="text" class="form-control item_shadow bg-secondary text-light">
							<label class="form-control text-light item_color item_shadow mt-4">Password:</label>
							<input id="password" name="password" type ="password" class="form-control item_shadow bg-secondary mb-4 text-light">
							<button type="submit" class="btn btn-info item_shadow item">Submit</button>
						</form>
						
<!--Load the user data, after he logged in-->
						<p class="form-control item_shadow item_color text-light mt-4">
							<?php 
							      echo "Your User ID is:". $_SESSION["user_id"]."<br>";
							      echo "Your Name is: ".$_SESSION["user_name"]."<br>";
							      echo "Your Surname is: ".$_SESSION["user_surname"]."<br>";
							      echo "Your credit car ID is: ".$_SESSION["user_credit_cart_id"]."<br>";
                                  
							?>
                            
						</p>

<!--End of the third-->				  
					</div>

<!--Fourth page-->
					<div id="page_four" class='form-group  border-light mb-4'>
					
<!--Load the target code into the text area-->	
						<form id = "form_item_1" class = "form-group ">

					      	<label class="form-control font-weight-bold item_color text_color_2 item_shadow">This is the target code for the SQL injection</label>
						    <textarea id = "input_sql_msg" class="form-control item_color_text bg-secondary item_shadow text-light " rows="20">
							</textarea>
					        <button type="button" id = "reset_sql_btn" class="btn btn-light text-light mt-3 item_color font-weight-bold item_shadow" >Reset</button>

					    </form>
						
<!--Load the solution code image-->							
						<div id = "page_four_solution" class='form-group mt-5  mb-5 '>
							
							<label id="img_description_2" class="form-control font-weight-bold item_color text_color_2 item_shadow">This is the secure code</label>
							<div id="close_btn_div_3"  class="alert item_color close_btn_div">
								<button id = "close_btn_3" class="close mb-3 text-light close_btn" type = "button">&times;</button>
								<img id = "sql_solution_img" class="form-control item_color item_shadow mb-4" src="items/sql_protected_code.png" alt="img3">
							</div>
						    
						</div>
						
<!--Load the new, secure login form-->
						<div id = "page_four_solution_2" class='form-group mt-5 item_color p-4 mb-5 border-light item_shadow'>
							
							<form id="safe_sql_form" action="pages/safe_sql_injection_page.php" method="post" >
								
								<label class="form-control text-light item_color item_shadow">User ID:</label>
					            <input id="safe_user_id" name="safe_user_id" type="text" class="form-control item_shadow bg-secondary text-light">
							    <label class="form-control text-light item_color item_shadow mt-4">Password:</label>
							    <input id="safe_password" name="safe_password" type ="password" class="form-control item_shadow bg-secondary mb-4 text-light">
								
							    <button type="submit" class="btn btn-info item_shadow ">Submit</button>
<!--Load the user data-->								
							   <p class="form-control item_shadow item_color text-light mt-4">
								<?php 
							      echo "Your User ID is:". $_SESSION["user_id"]."<br>";
							      echo "Your Name is: ".$_SESSION["user_name"]."<br>";
							      echo "Your Surname is: ".$_SESSION["user_surname"]."<br>";
							      echo "Your credit car ID is: ".$_SESSION["user_credit_cart_id"]."<br>";
                                  
							    ?>
								</p>
						    </form>
							
							
						</div>
						
					</div>

				
<!--Close Main Attack Body-->	
					
				</div>

<!--Pop up helper-->
				<div id ="pop_up_help" class = "alert alert-info alert-dismissible item_shadow">
					<button id = "pop_up_close" type="button" class="close" >&times;</button>
					<p id="alert_help_msg">
						This is the description area.
				    </p>
				</div>


<!--Close main page-->
				
			</div>
			
<!--Right Bar Menu-->
			
			<div id="right_sidebar_div" class="col-xl-4">
				
<!--Tips div menu-->
				
				<div id = "xss_div_right_sidebar" class=" p-xl-5 ">
					<div id = "tips_menu" class="form-group item_shadow">
						<label class="form-control item_color  text_color_2 font-weight-bold" >Here are some tips</label>
					    <p id="tips_text_area" class = "form-control item_color text-light" rows="8" >
This the tips area for every exercise.
						</p>
						
			        </div>
					
<!--Solution division-->
					
					<div id ="help_menu"  class="form-group mt-5 item_shadow">
						<label class="form-control item_color  text_color_2 font-weight-bold">Solution</label>
					    <p id="help_menu_text" class = "form-control item_color text-light" rows="8" >This is the Solution area. Check it
if you don't know the answer.
						
                        </p>
						
					</div>
					
				</div>
				
<!--Close Right Bar Menu-->					
				  
		  </div>
			
<!--Close Main Row-->
			
		</div>
		
<!--Close the container Div-->	
		
	</div>
	
<!--Scripts Area-->
	
	<script src="js/jquery-3.5.1.js"></script>
	<script src="js/xss_message_field_view_script.js"></script>
	<script src="js/xss_message_field_view_script.js"></script>
	<script src="js/xss_view_help_script.js"></script>
	<script src="js/xss_view_help_img_script.js"></script>
	<script src="js/xss_page_change_script.js"></script>
	<script src="js/information_view_script.js"></script>
	<script src="js/ajax_script.js"></script>
	<script src="js/close_pop_up_script.js"></script>
	<script src="js/reset_sql_script.js"></script>
	<script src="js/sql_solution_show_script.js"></script>
	<script src="js/img_full_screen_script.js"></script>
	

<!--Load external functions-->
    <?php  echo $_SESSION["script"].$_SESSION["script1"].$_SESSION["script2"].$_SESSION["script3"];?>

<!--Remove the functions values, when the page restarted-->
	<?php $_SESSION["script"] =""; $_SESSION["script1"] =""; $_SESSION["script2"] =""; $_SESSION["script3"] ="";?>
	<?php $_SESSION['newscript'] = ''?>

							
</body>
</html>