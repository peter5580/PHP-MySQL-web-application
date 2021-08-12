<?php
session_start();

// Check whether the user has login
if (isset($_SESSION['valid_user'])) {
    // Redirect to homepage if the user is logged in
    header("Location: home.php");
}
else {
    // import css and js file
    $stylesheet = '<link rel="stylesheet" type="text/css" href="Styles/login.css" />';
    $jqueryCDN = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';
    $script = '<script src="Script/default.js"></script>';

    // rendering login page
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>Login Page</title>';
    echo $stylesheet;
    echo $jqueryCDN;
    echo $script;
    echo '</head>';
    echo '<body>';
    echo '<header>';
    echo '</header>';
    echo '<div role="main">';
    echo '<div>';
    echo '<h2>Sign in</h2>';
    echo '</div>';
    echo '<form id="loginForm" action="user-verify.php" method="POST">';
    echo '<div id="login_div">';
    echo 'Username:<br />';
    echo '<input id="username_input" class="login_input" name="username" type="text" placeholder="Enter your username" size="16px" width="3" /><br/>';
    echo 'Password:<br />';
    echo '<input id="password_input" class="login_input" name="password" type="password" placeholder="Enter your password" size="16px" width="3" />';
    echo '<span class="errorMsgRed" hidden="hidden">Username and password cannot be empty</span><br/><br/><br/>';
    echo '<input id="login_btn" type="submit" value="Login" />';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
