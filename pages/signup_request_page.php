<?php
session_start();

$username         = $_POST['username'];
$password         = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$email            = $_POST['email'];

$username         = trim($username);
$password         = trim($password);
$password_confirm = trim($password_confirm );
$email            = trim($email);

$username         = htmlspecialchars($username);
$password         = htmlspecialchars($password);
$password_confirm = htmlspecialchars($password_confirm);
$email            = htmlspecialchars($email);


if(empty($username) || empty($password) || empty($email) || empty($password_confirm)){
	header("Location:../index.php");
    //$_SESSION['alert']="Complete !";
    $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Login first!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
    exit;
}

if($password != $password_confirm){
    header('location:../index.php');
    exit;
}

$conn = new mysqli("sql101.epizy.com", "epiz_27368706", "TI4qfAS8Hsege4M", "epiz_27368706_002");

if(mysqli_errno()){
	echo "error";
    
}

//create a query
//$query = "SELECT user_ID, name, surname, credit_card_ID FROM users WHERE user = '".$user_id."' AND psw = '".$psw."'";
$query = "INSERT INTO Names(user,password,email) VALUES (?,?,?)";
//prepare the connection with the database
$stmt =  $conn -> prepare($query);
//add values to the prepared parameters
$stmt -> bind_param('sss',$username ,$password,$email);
//execute the query
$stmt -> execute();

$stmt ->close();

   header("location:../MainPage.php");
 

?>