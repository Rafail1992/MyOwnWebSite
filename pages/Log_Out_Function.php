<?php
#Start session
session_start();
#Unset the id session to prevent login
unset($_SESSION["id"]);
#head back to the index page
header("Location:../index.php");
?>