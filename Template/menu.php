<nav>
    <div class="menuitem">
        <?php
        // generate different menu bar for Admin and common user
        if ($_SESSION['role'] == 'Administrator') {
            $href = "approve.php";
            $menutext = "Pending Approval";
        }
        else {
            $href = "input.php";
            $menutext = "Submit Progress";
        }
        echo '<a href="'.$href.'">';
        echo '<p class="menutext">'.$menutext.'</p>'
        ?>
        </a>
    </div>
    <div class="menuitem">
        <a href="record.php">
            <p class="menutext">Progress Record</p>
        </a>
    </div>
    <div class="menuitem">
        <a href="userinfo.php">
            <p class="menutext">User Information</p>
        </a>
    </div>
</nav>