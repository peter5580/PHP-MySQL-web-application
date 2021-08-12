<?php
$_POST['grid'] = $_POST['gridX1']."-".$_POST['gridX2']."/".$_POST['gridY1']."-".$_POST['gridY2'];
$post_array = array ('trade', 'date', 'storey', 'grid', 'workers_qty', 'description');
// create array for database insert statement, eliminate empty input
$insertFeild_array = array ();
foreach ($post_array as $item) {
    if (!empty($_POST[$item])) {
        array_push($insertFeild_array, $item);
    }
}
// convert array into string for database insert statement (field)
$insertFeild_str = implode(", ", $insertFeild_array);
// create string for database insert statement (prepare ?)
$insertValues_str = str_repeat("?, ", count($insertFeild_array) - 1)."?";

// prepare database query
$query = "INSERT INTO $dbName (".$insertFeild_str.")
          VALUES (".$insertValues_str.")";
$stmt = $db->prepare($query);

// bind variables to the prepared statement

$stmt->bind_param('isisis', $trade, $date, $storey, $grid, $workers_qty, $description);
?>