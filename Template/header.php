<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>eProgress</title>
    <link rel="stylesheet" type="text/css" href="/Styles/default.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="/Scripts/default.js"></script>
</head>
<body>
    <header>
        <div id="webpage_title">
            <h1 class="header_text">eProgress</h1>
        </div>
        <form id="logout_form" action="logout.php" method="POST">
            <div id="userfield">
                <span><?php echo $_SESSION['valid_user'].", ".$_SESSION['role'] ?></span>
                <a href="logout.php"><span id="logoutBtn">Logout</span></a>
            </div>
        </form>
    </header>