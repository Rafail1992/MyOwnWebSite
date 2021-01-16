<?php

//user name = rafail1992
//host      = localhost
//password  = Rafail19111992!

//start session
session_start();

//Insert valuers from sql injection form
$user_id = $_POST["safe_user_id"];
$psw     = $_POST["safe_password"];

//convert predefined characters
$user_id = htmlspecialchars($user_id);
$psw     = htmlspecialchars($psw);

//Remove white spaces 
$user_id = trim($user_id);
$psw     = trim($psw);

//check for empty inputs
if(empty($user_id) || empty($psw)){
	header("location:../MainPage.php");
}

//create a connection with the database
$conn = new mysqli("sql101.epizy.com", "epiz_27368706", "TI4qfAS8Hsege4M", "epiz_27368706_002");
//$conn = new mysqli("localhost","root","","users");
//return a message when there is an error
if(mysqli_errno()){
	echo "there was an error with the connection";
	header("location:../MainPage.php");
}
//create a query
//$query = "SELECT user_ID, name, surname, credit_card_ID FROM users WHERE user = '".$user_id."' AND psw = '".$psw."'";
$query = "SELECT user_ID, name, surname, credit_card_ID FROM users WHERE user = ? AND psw = ? ";
//prepare the connection with the database
$stmt =  $conn -> prepare($query);
//add values to the prepared parameters
$stmt -> bind_param('ss',$user_id,$psw);
//execute the query
$stmt -> execute();
//store the result of the execution
$stmt -> store_result();

$stmt -> bind_result($usr_id,$usr_name,$usr_surname,$usr_cd_id);
//export the stored data
$stmt ->fetch();

//Create sessions with the stored data
   $_SESSION["user_id"] = $usr_id;
   $_SESSION["user_name"] = $usr_name;
   $_SESSION["user_surname"] = $usr_surname;
   $_SESSION["user_credit_cart_id"] = $usr_cd_id;
   
//Create sessions which contain executable scripts 
   $_SESSION["script"] = "<script id = 'sql_viewer'>$(document).ready(function(){ $('#page_zero').hide();$('#page_two').hide();$('#page_one').hide();$('#page_three').show();$('#help_menu').hide(); }); </script> ";
   
   $_SESSION["script1"] = "<script>$('#tips_text_area').html('There are many different ways to perform an SQL Injection in a form. The user has to think about what is the SQL query which is used by the form. After that, it is easy to inject data to alter the output of the form.');</script>";
    
   $_SESSION["script2"] = "<script>$('#help_menu_text').html('To solve this exercise, the user needs to insert a SQL code in the Password and User ID field. After that, all it needs is to press the submit button. The SQL code is this:\<br\>\<span class = \'text_color_4 font-weight-bold\'\>a\' or \'a\' = \'a\'\</span\>');</script>";

   $_SESSION["script3"] =
	   "<script>$('#alert_help_msg').html('In this page, there are many different types of exercises. You can choose them by clicking the left sidebar. In the middle, the user can perform an SQL Injection. In the right sidebar there are some tips to solve the exercise,and if you don\'t know the answer, click the Solution button at the top of the page.');</script>";
   
//Close the connection with the database
   $stmt ->close();
   
//Go to the application page
   header("location:../MainPage.php");
 
?>
