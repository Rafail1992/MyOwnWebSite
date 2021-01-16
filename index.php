<?php
 session_start();
 $_SESSION['hide'] = "<script>$('#pop_up_help').hide();</script>";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rafail D. | Official Page</title>
	
	

<!--bootstrap files-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
<!--Styling item-->
	
	<link href="css/style_index_page.css" rel="stylesheet">

</head>

<body>
	
<!--Container-->
	<div class="container-fluid">
		
<!--Header of the page-->
		
		<header>
			
<!--Top header-->
			
			<div class="row ">
				
<!--Header left-->
				
				<div id = "start" class="col-md-12 d-flex justify-content-center">
					<a href="cv_page.php" class="mt-2 justify-content-center">
						 <span class="badge"><h1 id="header_text" class="mt-3 align-text-bottom font-italic font-weight-bold">Rafail Dardagiannopoulos</h1></span>
			        </a>
			    </div>
				
<!--Header right-->
				
				<div id="second_nav" class="col-sm-12 ">
				
				<!--Add a navigation bar-->
					<nav class="navbar-expand-sm">
						<ul class="navbar-nav mr-2 m-3 justify-content-center nav-tabs">
						<!--Link to the home page-->
							<li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-shadows"><h4>HOME</h4></a></li>
							<!--Link to the Vulnerability page-->
                            <li class="nav-item"><a href="MainPage.php" class="nav-link font-weight-bold"><h4>EXERCISES</h4></a></li>
							<!--Link to the CV-->
					        <li class="nav-item"><a href="cv_page.php" class="nav-link font-weight-bold"><h4>BIOGRAPHY</h4></a></li>
							<!--Link to the  page login section-->
							<li class="nav-item"><a href="#login_page" class="nav-link font-weight-bold"><h4>LOGIN</h4></a></li>
							<!--Link to the  page contact section-->
					        <li class="nav-item"><a href="#contact_page" class="nav-link font-weight-bold"><h4>CONTACT</h4></a></li>
					   </ul>
			      </nav>
				</div>
				
				<div class="col-12 p-2 w-10">
					

				
					
<!--The carousel of the main page-->
					
					
					<div id="myCarousel" class="carousel slide" dat-ride="carousel">
						
<!--The carousel indicators-->
						
						<ul class="carousel-indicators">
							<li data-target = "#myCarousel" data-slide-to ="0" class="active"></li>
							<li data-target = "#myCarousel" data-slide-to ="1"></li>
							<li data-target = "#myCarousel" data-slide-to ="2"></li>
						</ul>
						
<!--Carousel slider-->
						
						<div class="carousel-inner">

<!--Active carousel item-->
							<div class="carousel-item active">
								<img src="images/hacker_1280_480.png" alt="home_img" width ="600" class="img_carousel">
							</div>

<!--Second carousel item-->							
							<div class="carousel-item">
								<img src="images/document_1280_480.png" alt="bio_img" class="img_carousel">
							</div>
							
<!--Third carousel item-->
							<div class="carousel-item">
								<img src = "images/contact_1280_480.png" alt="contact_img" class="img_carousel">
							</div>
						
						</div>
						
<!--Left and right carousel controller-->
						
						<a class="carousel-control-prev" href="#myCarousel" data-slide = "prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#myCarousel" data-slide= "next">
							<span class="carousel-control-next-icon text-danger"></span>
						</a>
						
<!--close carousel-->
						
					</div>
					
<!--Close carousel div-->
					
				</div>
				
<!--Row close-->
				
			</div>
			
			
			
<!--Close header-->			
			
		</header>
		
		
<!--Main division-->
		
		<div id="main" class="row">
			
			<div class="col-md-12 mt-5">
				<h1 id = "text_title" class="text-center">About this Site</h1>
			</div>
			
<!--Left text bar-->
			
			<div class = "col-md-6 pl-5 pr-5 mt-5" >
				<p align="justify">
				    Welcome to my website. My name is Rafael Dardagiannopoulos and I am a web developer and security engineer. I created this page using different programming languages. Some of them are CSS, JavaScript, HTML, PHP and SQL. Of course, I used the Ajax technique and difference JavaScript libraries like jQuery.
				</p>
				
				<p align="justify">
					The goal of this website is to help everyone who starts with web development to understand and prevent some of the most common vulnerabilities. Prevent an attack is not always an easy task. However, a web developer can always learn some little and easy tricks to make their webpage safer. Protecting our page is always crucial.
				</p>
			</div>
			
<!--Right text bar-->
			
			<div class = "col-md-6 pl-5 pr-5 mt-5" >
				
				<p align="justify">
					As I mentioned before, this page will help you simulate some XSS attacks and SQL injections. After you log in, you can choose to solve some simple exercises. Of course, you can check for tips or, if you can't find the answer, just press the solution button and check the correct solution. By studying the solutions you will learn how to filter input data and keep your code safe.
				</p>
				
				<p align="justify">
					You can also check my profile and learn more about my studies and knowledge or contact me. Don't forget to create an account before you log in.
				</p>
			</div>
			
<!--Button to go to the home home page-->
			
			<div class="col-md-4 mt-5">
				<h3 class="font-weight-normal text-center"><a href="">HOME</a></h3>
				<div class="alert alert-primary alert_msg mt-5 alert_msg_holder" >
					<pre align ="center" class="alert_text_inner">"By click here,
you can reload
the main page"</pre>
				</div>
				
			</div>
			
<!--Button to go to the CV page-->
				
			<div class="col-md-4 mt-5">
			  <h3 class="font-weight-normal text-center"><a href="cv_page.php">THE AUTHOR</a></h3>
			  <div class="alert alert-primary alert_msg mt-5 alert_msg_holder" >
					<pre align ="center" class="alert_text_inner">"Check my CV
and learn
   for me. "</pre>
				</div>
				
			</div>
			
<!--Button to go to the main website -->
			<div class="col-md-4 mt-5">
				<h3 class="font-weight-normal text-center"><a href="MainPage.php">WEBSITE</a></h3>
				<div class="alert alert-primary alert_msg mt-5 alert_msg_holder" >
					<pre class="alert_text_inner" align ="center">"Check my Website
and learn
    about it.  "</pre>
				</div>
			</div>
			
<!--Rolling message canvas-->
			<div class="col-12 mt-5">
				<canvas id="msg_canvas" width ="1000" height = "400" class="ml-auto mr-auto"></canvas>
				
			</div>

<!--Close the main division body-->
			
		</div>
		
<!--Open the jumboboxs-->
		
		<div class="row">
			
<!--Jumbobox 1-->
			
			<div class="jumbotron col-md-6">
				<h2 id = "contact_page"class="text-center">CONTACT</h2>
				
<!--Contact cards-->
				
				<div class="row mt-5">
				
<!--Contact card telephone-->
				<div class="col-6 card ">
					
					<a href="tel:+306955047835" class="ml-auto mr-auto mt-4"><img src="images/phone-1439839_640.png" width="100" ></a>

					<div class="card-body">
						<h6 class="text-center mt-1">Tel. Number</h6>
						<p class="text-center">+30 6955047835</p>
						<a href="tel:+306955047835"><button id="tel_btn" type="button" class="btn " >Call me</button></a>
					</div>
				</div>
					
<!--Contact card email-->
				
				<div class="col-6 card">
					
					<a href="mailto:rafaildardagiannopoulos@gmail.com" class="ml-auto mr-auto mt-4"><img src="images/mail-1454731_640.png" width="100" ></a>
					
				  <div class="card-body">
						<h6 class="text-center mt-1">Email</h6>
						<p class="text-center">rafaildardagiannopoulos@gmail.com</p>
						<a href="mailto:rafaildardagiannopoulos@gmail.com"><button  id="email_btn" name="email_btn" type="button" class="btn" >Send email</button></a>
					    
					</div>
				</div>

				</div>
				
<!-- End of  left card-->
				
            </div>
			
<!--Login section-->
			<div id="login_jumbo" class="jumbotron col-md-6">
                <h2 id = "login_page" class="text-center">LOGIN</h2>
                <div class="card mt-5">
					<div class="card-body">
						
						<form id ="login_form" class = "form-group mt-4" method = "post" action = "pages/login_request_page.php" >
							<label class="form-control">Username</label>
						    <input id="username" name="username" class="form-control" type="text" required>
						    <label class="form-control mt-2" >Password</label>
						    <input id="password" name="password" class="form-control" type="password" required>
						    <button type="submit" class="btn mt-3 submit_btn submit_btn">Login</button>
							<p class="mt-3">To Sign up click <a href="#login_jumbo" id="sign_up_click" class="font-weight-bold">here</a></p>
					    </form>
						
					</div>
				</div>
             </div>

<!--Include the sign_up_page and the window alert page to the main document-->
			
			<?php include("pages/sign_up_page.php"); ?>
			<?php include("pages/alert_window_page.php");?>
			
			

<!-- End of  login card-->
			
		</div>
		
<!--Add a go to the top button-->
	<div class="jumbotron-fluid ">
		<div class="row">
			<div class = "col-12 justify-content-end d-flex">
				<a href="#start">
					<button class="btn mr-3 btn-lg">
					
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                        <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                    </svg>
  
				</button>
				</a>
			</div>
			
<!--Add the copyrights of the page-->
			<div id="copyrights" class="copyright mt-3 col-12 mt-3">&copy;2021 - <strong>Rafail Dardagiannopoulos - Alexandreia, Greece</strong></div>
	  </div>
<!--Close container division-->
	   
	</div>
<!--scripts-->
	<script src="js/jquery-3.5.1.js"></script>
	<script src="js/carousel_img_size_script.js"></script>
	<script src ="js/front_page_canvas_script.js"></script>
	<script src="js/change_login_signup_script.js"></script>
	<script src="js/close_pop_up_script.js"></script>
	
<!--Call hide and newscript function when it needed-->
    <?php echo $_SESSION['hide'];?>
    <?php echo $_SESSION['newscript']; ?>
	
<!--Remove the values of the function when the page reloaded-->
	<?php $_SESSION['alert'] = ''?>
    <?php $_SESSION['newscript'] = ''?>
	
</body>
</html>