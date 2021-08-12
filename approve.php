<?php
// import webpage template
require('auth.php');
require('Template/header.php');
require('Template/menu.php');
require('create_htmltag.php');

// verify the role should be Admin
if ($_SESSION['role'] != 'Administrator') {
    echo '<div class="inner-page">';
    echo '<p>You are not allowed to access this page.</p>';
    exit();
}

// connect to MySQL 'submitted_record' database
$dbName = 'submitted_record';
$db = connectDB();

// for each POST variable, update column 'status'
foreach ($_POST as $key => $value) {
    // prepare database query
    $query = "UPDATE ".$dbName.
             " SET status = ?
              WHERE id = ?";
    $stmt = $db->prepare($query);

    // bind variables to the prepared statement
    $id = intval(explode('-', $value)[0]);
    $status = explode('-', $value)[1];
    $stmt->bind_param('si', $status, $id);

    // excecute MySQL query
    $stmt->execute();
}

// close database connection
$db->close();

// render heading
echo '<div class="inner-page">';
echo '<h2>Site Progress Submission Pending for Approval</h2>'; 

// connecting MySQL database
echo '<form action="approve.php" method="POST">';
echo '<table id="record-table">';
echo '<thead class="table-header">';
echo '<tr class="table-header-row">';
echo '<th class="table-header-text">Date</th>';
echo '<th class="table-header-text">Trade</th>';
echo '<th class="table-header-text">Storey</th>';
echo '<th class="table-header-text">Grid</th>';
echo '<th class="table-header-text">Workers</th>';
echo '<th class="table-header-text">Description</th>';
echo '</tr>';
echo '</thead>';

// showing record submitted by user which is pending for approval
create_htmltag_pending();

// submit button
echo '<tfoot><tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td><input type="submit" value="Submit" id="approve_btn" /></td>';
echo '</tr></tfoot></table>';
?>
