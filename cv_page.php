<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Author Profile</title>
	
<!--bootstrap icons-->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
	<div id = "start" class="container-fluid">
		
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
					<nav class="navbar-expand-sm">
						<ul class="navbar-nav mr-2 m-3 justify-content-center nav-tabs">
							<li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-shadows"><h4>HOME</h4></a></li>
                            <li class="nav-item"><a href="MainPage.php" class="nav-link font-weight-bold"><h4>EXERCISES</h4></a></li>
					        <li class="nav-item"><a href="cv_page.php" class="nav-link font-weight-bold"><h4>BIOGRAPHY</h4></a></li>
							<li class="nav-item"><a href="#login_page" class="nav-link font-weight-bold"><h4>LOGIN</h4></a></li>
					        <li class="nav-item"><a href="#contact_page" class="nav-link font-weight-bold"><h4>CONTACT</h4></a></li>
					   </ul>
			      </nav>
				</div>
				
				<div class="col-12 p-2 w-10">
					

					
<!--Close carousel div-->
					
				</div>
				
<!--Row close-->
				
			</div>
			
			
			
<!--Close header-->			
			
		</header>
		
		
		
<!--Main division-->
		<hr>


<!-- Start of Row1-->		
		
		<div id="main" class="row">
			
<!--My name-->
			
			<div id="athor_name" class="col-6">
				<h1>Rafail Dardagiannopoulos</h1>
			</div>
			
<!--Download my CV-->
				
		    <div id="rv_file" class="col-6">
			    <a href="items/CV.pdf" class="d-flex justify-content-center" download><h3>Download my Resume</h3></a>
		    </div>
				
		</div>
		
<!--End of Row1-->
		
		<hr>
		
		<div class="row">
			
		</div>
		
		<hr>
		
<!--Start of row 1+1/2-->
		<div class="row">
			
			<div class="col-md-7">
				<div class="row">
					
					<div class="col-xl-3">
						<img id = 'profil_pic' src="images/rafail.jpg" alt="profil pic" style = "width: 200px;">
					</div>
					
					<div class="col-xl-9">
						<h4>Web Developer / Security Engineer</h4>
						<br>
						<p class="text-justify pl-2 pr-5">I started my journey in 2011 with my degree. I learned many things during my Undergraduate studies. I worked with Linux software like Ubuntu and Kali and learned languages like                           JavaScript, C, C++, and Java. <br>During my master's degree, I studied information security and computer forensics and I learned about secure software development, secure design of networks and the General Data                            Protection Regulation. My dissertation was about Analysis and implementation of Web Application Penetration Test and reporting on an online website. <br>Today I am studying web development, various languages and frameworks such as Python, JavaScript, HTML, SQL, React, CSS, PHP, and Bootstrap.
</p>
					</div>
					
				</div>
				
			</div>
			
			<div class="col-lg-5 pl-5">
				<h4>Contact</h4>
				<pre class="mt-4"><b>Full Name: </b>Rafail Dardagiannopoulos
<b>Location: </b> 4 Nikolaou Plastira 
           Alexandreia
           Greece
<b>LinkedIn: </b><a href ="www.linkedin.com/in/rafaildardagiannopoulos"> www.linkedin.com/in/rafaildardagiannopoulos</a>
<b>Tel.: </b>     +30 6955047835
<b>Email: </b>    rafaildardagiannopoulos@gmail.com
		  </pre>
			</div>
			
		</div>
		<hr>
<!--End of row 1+1/2-->		

<!-- Start of Row2-->	
		
		<div class="row">
			<div class = "col-md-6 mt-2">
				<h2 class = pb-3>Education</h2>
			    <hr >
				
<!--Education 1 -->
			
			
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>University of Western Macedonia</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> October 2011 - February 2019 </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Bachelors</span>
					<p class="mt-4">
						<b>Field of study:</b> Information Technology Engineer<br>
						<b>Specialty:</b> Network Engineer<br>
						<b>Grade:</b> 7,21 / 10
						
					</p>

<!--End of education-->
					
				</div>

<!--Education 2 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>University of East London</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> October 2019 - October 2020 </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Masters</span>
					<p class="mt-4">
						<b>Field of study:</b> Information Security and Computer Forensics<br>
						<b>Dissertation:</b> Analysis and implementation of Web Application Penetration Test and reporting on an online website.
						
						
					</p>
					
<!--End of education-->					
					
				</div>
			
				
<!--Education 3 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>University of Piraeus</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> December 2018 - March 2019 </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Training Courses</span>
					<p class="mt-4">
						<b>Field of study:</b> Basic business processes in the SAP ERP system<br>
						
						
						
					</p>
					
<!--End of education-->
					
				</div>
				
<!--Education 4 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>University of Piraeus</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> November 2018 - December 2018 </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Training Courses</span>
					<p class="mt-4">
						<b>Field of study:</b> Introduction to Intergrated Business Processes and the SAP ERP System<br>
						
						
						
					</p>
					
<!--End of education-->
					
				</div>
				
<!--Education 5 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>Center for Security Studies</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> June 2020 - July 2020 </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Training Courses</span>
					<p class="mt-4">
						<b>Field of study:</b> PRIVATE SECURITY STAFF TRAINING<br>
						
						
					
					</p>
					
<!--End of education-->
					
				</div>
			
<!--Education 6 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>National and Kapodistrian University of Athens</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> September 2020 - Now </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Training Courses</span>
					<p class="mt-4">
						<b>Field of study:</b> Ultimate Web Development for Experts with React 16, Angular 7 Vue.js 2, HTML, JavaScript,<br> JQuery, and Bootstrap 4<br>
				
					</p>
					
<!--End of education-->
					
				</div>
				
<!--Education 7 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>National and Kapodistrian University of Athens</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> September 2020 - Now </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Training Courses</span>
					<p class="mt-4">
						<b>Field of study:</b> Web Development<br>
				
					</p>
					
<!--End of education-->
					
				</div>
				
<!--Education 8 -->
				
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>National and Kapodistrian University of Athens</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> October 2020 - Now </h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Training Courses</span>
					<p class="mt-4">
						<b>Field of study:</b> Ruby and Ruby on Rails: Web and Desktop Application Development<br>
				        
					</p>
					
<!--End of education-->
					
				</div>
				
<!--End of Row 2/a-->
				
			</div>			
			
				
<!---->
			<div class = "col-md-6 mt-3">
				<h2 class = "mb-4">Programming languages, libraries</h2>
				<hr>
				<div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> HTML</div>
                </div>
                <div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> CSS</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> JQuery</div>
                </div>
                <div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> JAVASCRIPT</div>
                </div>
                <div class="progress mt-5">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> PHP</div>
                </div>
				 <div class="progress mt-5">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> SQL</div>
                </div>
				
				
				<div class="progress mt-5">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> Cisco routing</div>
                </div>
				
				
				 <div class="progress mt-5">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> Angular</div>
                </div>
                <div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> Python</div>
                </div>
                <div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 55%">Ajax</div>
                </div>
                <div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> React</div>
                </div>
				 <div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> Ruby</div>
                </div>
				
				<div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> C</div>
                </div>
				
				<div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 45%">Java</div>
                </div>
				
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 35%"> XML</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 35%"> Json</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 35%"> C</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> Node.js</div>
				</div>
				
				<div >
					<hr class = "mt-5">
				<h2 class = "mb-4">Frameworks and tools</h2>
				<hr>
				<div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> Dreamweaver</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> Bootstrap 4</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> Autopsy Digital Forensics</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> Wordpress</div>
                </div>
					
				<div class="progress mt-5">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Cisco Packet Tracer</div>
                </div>
					
				<div class="progress mt-5">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 65%">ZBrush</div>
                </div>
					
				<div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 55%">Adobe Photoshop</div>
                </div>
					
				<div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Adobe InDesign</div>
				</div>
					
				
					
				<div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> Joomla</div>
				</div>
				<div class="progress mt-5">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> GNS3</div>
				</div>
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 35%"> SAP</div>
                </div>
                
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> GitHub</div>
                </div>
				<div class="progress mt-5">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> Flask</div>
                </div>
				</div>
			</div>
			
<!--End of Row2-->
			
		</div>
	
		<hr>
		
<!-- Start of Row3-->	
		
		<div class = "mt-4">
			
		  <h2 class = pb-3>Work Experience</h2>
		  <hr>
			
		  <div class="row">
			  
<!-- Start of Job 1 -->
			  
			  <div class="col-md-6 mt-4">
				  
				  <div class="row">
					  
					<div class="col-md-6 mt-4">
						<h3>Techspot Alexandreia</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3>November 2017 - May 2018</h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Jobs</span>
					<p class="mt-4">
						<p><b>Title: </b>Computer Repair Technician<br>
						   <b>Description: </b>Computer and Mobile phone software and hardware repairing<br>
						   <b>Location: </b>Alexandreia, Central Macedonia, Greece
					    </p>
					    
					</p>
				</div>
			  
<!-- End of Job 1 -->
			  
			  </div>
			  
<!-- Start of Job 2 -->
			
			  <div class="col-md-6 mt-4">
				  
				  <div class="row">
					  
					<div class="col-md-6 mt-4">
						<h3>Greek Army</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3>February 2016 - October 2016</h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Jobs</span>
					<p class="mt-4">
						<p><b>Title: </b>Computer Operator<br>
						   <b>Description: </b>Office work<br>
						   <b>Location: </b>Alexandreia, Central Macedonia, Greece
					    </p>
					    
					</p>
				</div>
			
<!-- End of Job 2 -->
			  
		  </div>
			
<!--End of Row3-->

		</div>
		
		<hr>
		
<!-- Start of Row4 -->
		
		<div class="mt-4">
			
		<h2 class = pb-3>Other Skills and Certifications</h2>
		<hr>
		
		<div class="row">
			
			
			<div class="col-md-6 mt-4">
				
				  <h3>Skills</h3>
				  <div class="progress mt-5">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> Greek</div>
                  </div>
				  <div class="progress mt-5">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> Windows</div>
                  </div>
				   <div class="progress mt-5">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> Microsoft Office</div>
				   </div>
				   <div class="progress mt-5">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%">English</div>
				   </div>
				  <div class="progress mt-5">
                  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> Linux Kali</div>
                  </div>
				  <div class="progress mt-5">
                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> German</div>
                  </div>
				  
			  </div>
			  
			  <div class="col-md-6 mt-4">
				  
				  <h3>Certifications</h3>
				  
				  
				  <div class="row">
					<div class="col-md-6 mt-4">
						<h3>University of Piraeus</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> November 2018 - December 2018</h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Sap</span>
					<p class="mt-4">
						<b>Certificae Title: </b>Introduction to Intergrated Business Processes and the SAP ERP System<br>
						
					</p>
				</div>
				  
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>University of Piraeus</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> December 2018 - March 2019</h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">Sap</span>
					<p class="mt-4">
						<b>Certificae Title: </b>Basic business processes in the SAP ERP system<br>
						
					</p>
				</div>
				  
				<div class="row">
					<div class="col-md-6 mt-4">
						<h3>Vellum Global Educational Services</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> May 2020 - August 2020</h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">WordPress</span>
					<p class="mt-4">
						<b>Certificae Title: </b>Certification in the construction of web pages and e-shop
					</p>
				</div>
				  
				  <div class="row">
					<div class="col-md-6 mt-4">
						<h3>LRN Learing Resource Network</h3>
					</div>
					<div class="col-md-6 mt-4">
						<h3> June 2020</h3>
					</div>
					
				</div>
				
				<div>
					<span class="badge badge-secondary p-2 mt-3">English</span>
					<p class="mt-4">
						<b>Certificae Title: </b>LRN Level 3 Certificate in ESOL Iternational (CEF C2)<br>
						<b>Greade: </b>DISTINCTION
					</p>
				</div>
				  
			  </div>
			  
		  </div>
			
		</div>
		
<!--End of Row4-->
		
		</div>
	<hr>
		
		
<!--Open the jumboboxs-->
		
		<div class="row">
			
<!--Jumbobox 1-->
			
			<div class="jumbotron col-md-6 ">
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
			
<!---->
			<div id="login_jumbo" class="jumbotron  col-md-6">
                <h2 id = "login_page" class="text-center">LOGIN</h2>
                <div class="card mt-5">
					<div class="card-body">
						
						<form id ="login_form"class = "form-group mt-4" method="post" action="pages/login_request_page.php" >
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

<!---->
			
			<?php include("pages/sign_up_page.php"); ?>
			<?php include("pages/alert_window_page.php")?>

<!-- End of  login card-->
			
		</div>

	<div class="jumbotron-fluid">
	  <div class="row">
			<div class = "col-12 justify-content-end d-flex">
				<a href="#start">
					<button class="btn mr-3 btn-l">
					
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                        <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                    </svg>
  
				</button>
				</a>
			</div>
		  
			<div id="copyrights" class="copyright mt-3 col-12 mb-3">&copy;2021 - <strong>Rafail Dardagiannopoulos - Alexandreia, Greece</strong></div>
	  </div>
<!--Close container division-->
	   
	</div>
<!--scripts-->
	<script src="js/jquery-3.5.1.js"></script>
	<script src="js/carousel_img_size_script.js"></script>
	<script src ="js/front_page_canvas_script.js"></script>
	<script src="js/change_login_signup_script.js"></script>
	<script src="js/close_pop_up_script.js"></script>
    <?php echo $_SESSION['hide'];?>
    <?php echo $_SESSION['newscript']; ?>
	<?php $_SESSION['alert'] = ''?>
    <?php $_SESSION['newscript'] = ''?>
</body>
</html>