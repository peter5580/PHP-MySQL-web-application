<?php
// import webpage template

use function PHPSTORM_META\type;

require('auth.php');
require('Template/header.php');
require('Template/menu.php');
require('create_htmltag.php');

// Database of submitted site work
$dbName = 'submitted_record';

// connecting MySQL database
$db = connectDB();

// validate input variable vis http post method
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        // show error message for empty input
        echo '<div class="inner-page">';
        echo "<p>Column '".$key."' cannot be empty. Please submit again.</p>";
        exit();
    }
}
if (!(intval($_POST['workers']) > 0)) {
    // show error message for invalid workers quantity
    echo '<div class="inner-page">';
    echo "<p>Column 'workers' must be postive integer. Please submit again.</p>";
    exit();
}

// define variable for database insert query
$trade = $_POST['trade'];
$date = $_POST['date'];
$storey = $_POST['storey'];
$gridX1 = $_POST['gridX1'];
$gridX2 = $_POST['gridX2'];
$gridY1 = $_POST['gridY1'];
$gridY2 = $_POST['gridY2'];
$workers_qty = intval($_POST['workers']);
$description = $_POST['description'];
$status = 'Pending';

// prepare database query
$query = "INSERT INTO $dbName (trade, date, storey, gridX1, gridX2, gridY1, gridY2, workers_qty, description, status)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($query);

// bind variables to the prepared statement
$stmt->bind_param('isissssiss', $trade, $date, $storey, $gridX1, $gridX2, $gridY1, $gridY2, $workers_qty, $description, $status);

// excecute MySQL query, close database connection
$stmt->execute();
$db->close();

// print if successfully insert data in database
if ($stmt->affected_rows > 0) {
    echo '<div class="inner-page">';
    echo "Site progress is submitted successfully.";
}
else {
    echo '<div class="inner-page">';
    echo "Failed to submit site progress. Please try again.";
}
?>