<?php
session_start();

// Check whether the user has logged in
if (!isset($_SESSION['valid_user'])) {
    header("Location: login.php");
}
?>