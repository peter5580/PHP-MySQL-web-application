<?php
// import webpage template
require('auth.php');
require('Template/header.php');
require('Template/menu.php');
require('create_htmltag.php');

// render heading
echo '<div class="inner-page">';
echo '<h2>Progress Submission Record</h2>';

// connecting MySQL database
echo '<table id="record-table">';
echo '<thead class="table-header">';
echo '<tr class="table-header-row">';
echo '<th class="table-header-text">Date</th>';
echo '<th class="table-header-text">Trade</th>';
echo '<th class="table-header-text">Storey</th>';
echo '<th class="table-header-text">Grid</th>';
echo '<th class="table-header-text">Workers</th>';
echo '<th class="table-header-text">Description</th>';
echo '<th class="table-header-text">Status</th>';
echo '</tr>';
echo '</thead>';

if ($_SESSION['role'] == 'Administrator') {
    create_htmltag_trRecord_admin();
}
else {
    create_htmltag_trRecord();
}
?>