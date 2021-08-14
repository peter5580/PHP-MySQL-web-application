<?php
// import webpage template
include_once('auth.php');
include_once('Template/header.php');
include_once('Template/menu.php');
include_once('create_htmltag.php');

$username = $_SESSION['valid_user'];
$role = $_SESSION['role'];
?>
<!--user info-->
<div class="inner-page">
    <h2>User Information</h2>
    <p>Username: <?php echo $username ?></p>
    <p>Role: <?php echo $role ?></p>
<?php
// additional info for common user
create_htmltag_userinfo();
?>
</div>
</body>
</html>
