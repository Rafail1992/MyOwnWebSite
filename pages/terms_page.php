<?php
  session_start();
  
 //Include the page use terms
  $_SESSION['newscript']="<script>$('#pop_up_help').show();var exercise = document.getElementById('main_page_menu');var warning = document.getElementById('warning_msg');function add_warning(){warning.innerHTML = 'This is a demonstration site. The personal data of each user are deleted after 1 month.<br> Those data are not used for anything other than the user sign in.<br> The only saved date are the email and the user\'s password and username.';warning.scrollIntoView();}window.addEventListener('load',add_warning,false);</script>";

  header('location:../index.php');
?>