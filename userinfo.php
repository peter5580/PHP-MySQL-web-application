<?php
//import webpage template
require('auth.php');
require('Template/header.php');
require('Template/menu.php');
require('create_htmltag.php');

$username = $_SESSION['valid_user'];
$role = $_SESSION['role'];
?>
<div class="inner-page">
    <h2>User Information</h2>
    <p>Username: <?php echo $username ?></p>
    <p>Role: <?php echo $role ?></p>
<?php
create_htmltag_userinfo();
?>
</div>
</body>
</html>
