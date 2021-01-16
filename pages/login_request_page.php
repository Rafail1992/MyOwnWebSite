<?php
session_start();
//Insert data from index page
$username         = $_POST['username'];
$password         = $_POST['password'];

//Remove the spaces from the inserted data
$username         = trim($username);
$password         = trim($password);

//Prevent the special characters execution
$username         = htmlspecialchars($username);
$password         = htmlspecialchars($password);

//Check if there is an empty username or password
if(empty($username) || empty($password) ){
	//if there is an empty username or password  go back to the index page
	header("Location:../index.php");
    exit;
}
//Make a connection with the database(for security reasons, the connection data are fake )
$conn = new mysqli("Host", "Usrname", "Usrpassword", "Database");

//Check for connection errors
if(mysqli_errno()){
    // Echo error for connection errors
	echo "error";
    
}

//Create a query
$query = "SELECT userID, email FROM Names WHERE user = ? AND password = ? ";
//Prepare the connection with the database
$stmt =  $conn -> prepare($query);
//Add values to the prepared parameters
$stmt -> bind_param('ss',$username ,$password);
//Execute the query
$stmt -> execute();
//Store the result of the execution
$stmt -> store_result();
//Store the result as a parameter
$stmt -> bind_result($usr_id,$usr_email);
//Export the stored data
$stmt ->fetch();

//Create a new session with the user ID
$_SESSION['id'] = $usr_id;

//Check if the user ID don't exist
   if(!$_SESSION['id']){
	    //Create a session with a new alert message
        $_SESSION['alert']="Wrong Password or Username!";
		//Show the alert window and change its content
        $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Wrong Password or          Username!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
        //Go back to the index file
		header("location:../index.php");
        exit;
   }
   //Close the connnection with the database
   $stmt ->close();

   //Go to the MainPage file
   header("location:../MainPage.php");
 

?>