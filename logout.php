<?php
//start session
session_start();

//register session parameter
unset($_SESSION['valid_user']);
unset($_SESSION['role']);

//destroy session
session_destroy();

//redirect to the login page
header('Location: login.php');
?>