<?php
session_start();

// Check whether the user has logged in, redirect to login page if not
if (!isset($_SESSION['valid_user'])) {
    header("Location: login.php");
}

//import webpage template
require('Template/header.php');
require('Template/menu.php');
?>
    <div class="inner-page">
        <section>
            Welcome to the homepage!
        </section>
    </div>
</body>
</html>
