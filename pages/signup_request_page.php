<?php
session_start();

//Insert data from index page
$username         = $_POST['username'];
$password         = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$email            = $_POST['email'];

//Remove the spaces from the inserted data
$username         = trim($username);
$password         = trim($password);
$password_confirm = trim($password_confirm );
$email            = trim($email);

//Prevent the special characters execution
$username         = htmlspecialchars($username);
$password         = htmlspecialchars($password);
$password_confirm = htmlspecialchars($password_confirm);
$email            = htmlspecialchars($email);

//Make a connection with the database(for security reasons, the connection data are fake )
$conn = new mysqli("Host", "Usrname", "Usrpassword", "Database");

//Check for connection errors
if(mysqli_errno()){
    // Echo error for connection errors
	echo "error";
    
}

//Chech for empty input fields
if(empty($username) || empty($password) || empty($email) || empty($password_confirm)){
     //if it is empty, go back to the index file
	header("Location:../index.php");
    //Show the alert window and change its content
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Login first!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
    exit;
}
//Check if the confirmed password is different from the user password
if($password != $password_confirm){
     //if it is different go back to the index file
    header('location:../index.php');
    //Show the alert window and change its content
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Different password!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
    exit;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Check duplication for email
//Build the request 
$query_1 = "SELECT userID  FROM Names where email = ?";
//Prepare the connection to send the query
$stmt_1 = $conn -> prepare($query_1);
//Add the parameters
$stmt_1 -> bind_param('s',$email);
//Execute the query
$stmt_1 -> execute();
//Store the data after the execution of the query
$stmt_1 -> store_result();
//Restore the results and create a variable with the value
$stmt_1 -> bind_result($checker_1);
//Use the values with the fetch funcion
$stmt_1 -> fetch();
// Check if the email exist
if($checker_1){
    //if it exist, go back to the index file
    header("location:../index.php");
    //Show the alert window and change its content
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'This email already exists!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
    exit;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Check duplication for username
//Build the request 
$query_2 = "SELECT userID  FROM Names where user = ?";
//Prepare the connection to send the query
$stmt_2 = $conn -> prepare($query_2);
//Add the parameters
$stmt_2 -> bind_param('s',$username         );
//Execute the query
$stmt_2 -> execute();
//Store the data after the execution of the query
$stmt_2 -> store_result();
//Restore the results and create a variable with the value
$stmt_2 -> bind_result($checker_2);
//Use the values with the fetch funcion
$stmt_2 -> fetch();
// check if the email exist
if($checker_2){
    //if it exist go back to the index file
    header("location:../index.php");
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'This Username already exists!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
    exit;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//create a query
//$query = "SELECT user_ID, name, surname, credit_card_ID FROM users WHERE user = '".$user_id."' AND psw = '".$psw."'";
$query = "INSERT INTO Names(user,password,email) VALUES (?,?,?)";
//prepare the connection with the database
$stmt =  $conn -> prepare($query);
//add values to the prepared parameters
$stmt -> bind_param('sss',$username ,$password,$email);
//execute the query
$stmt -> execute();
//Close the connection with the database
$stmt ->close();
//Head to the Main page
  //Head to the index

   header("location:../index.php");
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Thanks for your Sign Up';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
    exit;

 

?>
