<?php 
#start session
session_start();

unset($_SESSION['username']);//Deletes username key

#session_destroy();

header('Location: login.php');// redirects to login page

?>