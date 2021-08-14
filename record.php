<?php
// import webpage template
include_once('auth.php');
include_once('Template/header.php');
include_once('Template/menu.php');
include_once('create_htmltag.php');
?>

<!--render heading-->
<div class="inner-page">
<h2>Progress Submission Record</h2>

<!--storey filter-->
Storey:&nbsp
<select id="storey-filter" class="filter" name="storey">
    <option value="all">All</option>
    <?php
    create_htmltag_select_storey();
    ?>
</select>
<br/>
<!--submission status filter-->
Submission Status:&nbsp
<input type="checkbox" id="checkbox1" name="checkbox1" value="Approved" checked="true">
    <label for="checkbox1">Approved</label>&nbsp
</input>
<input type="checkbox" id="checkbox2" name="checkbox2" value="Pending" checked="true">
    <label for="checkbox2">Pending</label>&nbsp
</input>
<input type="checkbox" id="checkbox3" name="checkbox3" value="Rejected" checked="true">
    <label for="checkbox3">Rejected</label>&nbsp
</input>

<!--table header-->
<table id="record-table">
<thead class="table-header">
<tr class="table-header-row">
<th class="table-header-text">Date</th>
<th class="table-header-text">Trade</th>
<th class="table-header-text">Storey</th>
<th class="table-header-text">Grid</th>
<th class="table-header-text">Workers</th>
<th class="table-header-text">Description</th>
<th class="table-header-text">Status</th>
</tr>
</thead>

<?php
if ($_SESSION['role'] == 'Administrator') {
    create_htmltag_trRecord_admin();
}
else {
    // extract progress record from database
    create_htmltag_trRecord();
}
?>

</table>
</div>
</body>
</html>