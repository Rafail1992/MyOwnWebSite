<?php
session_start();

$username         = $_POST['username'];
$password         = $_POST['password'];


$username         = trim($username);
$password         = trim($password);


$username         = htmlspecialchars($username);
$password         = htmlspecialchars($password);


if(empty($username) || empty($password) ){
	header("Location:../index.php");
    exit;
}

$conn = new mysqli("sql101.epizy.com", "epiz_27368706", "TI4qfAS8Hsege4M", "epiz_27368706_002");

if(mysqli_errno()){
	echo "error";
    exit;
}

//create a query
//$query = "SELECT user_ID, name, surname, credit_card_ID FROM users WHERE user = '".$user_id."' AND psw = '".$psw."'";
$query = "SELECT userID, email FROM Names WHERE user = ? AND password = ? ";
//prepare the connection with the database
$stmt =  $conn -> prepare($query);
//add values to the prepared parameters
$stmt -> bind_param('ss',$username ,$password);
//execute the query
$stmt -> execute();
//store the result of the execution
$stmt -> store_result();

$stmt -> bind_result($usr_id,$usr_email);
//export the stored data
$stmt ->fetch();

$_SESSION['id'] = $usr_id;

   if(!$_SESSION['id']){
        $_SESSION['alert']="Wrong Password or Username!";
        $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'Wrong Password or          Username!';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";
        header("location:../index.php");
        exit;
   }

   
   header("location:../MainPage.php");
 
$stmt ->close();
?>