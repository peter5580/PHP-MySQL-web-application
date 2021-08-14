<?php
session_start();

if (empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: login.php");
    
}
else {
    $username = str_replace(";", "", $_POST['username']);
    $password = str_replace(";", "", $_POST['password']);
    
    //Connect to MySQL database
    @$db_conn = new mysqli('127.0.0.1', 'webuser', 'Wvs08!)52', 'progressdb');

    if (mysqli_connect_errno()) {
        echo 'Error on database connection: '.mysqli_connect_error();
        exit;
    }

    // Create query to match username and password
    $query = "SELECT * FROM user 
             WHERE username = '".$username."' AND 
             password = sha1('".$password."')";

    $result = $db_conn->query($query);

    // assign session variable for web authentication
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $_SESSION['valid_user'] = $row['username'];
        $_SESSION['role'] = $row['role'];
    }

    $db_conn->close();
    // redirect to home page
    header("Location: home.php");
}
?>