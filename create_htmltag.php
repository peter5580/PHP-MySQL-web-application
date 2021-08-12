<?php
function connectDB() {
    if ($_SESSION['role'] == 'Administrator') {
        @$db = new mysqli('127.0.1.1', 'webadmin', 'Wbs)*10%@', 'progressdb');
    }
    else {
        @$db = new mysqli('127.0.1.1', 'webuser', 'Wvs08!)52', 'progressdb');
    }
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br/>
        Please try again later.</p>';
        exit;
    }
    return $db;
}

function create_htmltag_select($dbTable, $dbValue, $dbOption) {
    $dbTable = str_replace(";", "", $dbTable);
    $dbValue = str_replace(";", "", $dbValue);
    $dbOption = str_replace(";", "", $dbOption);
    $db = connectDB();
    $query = "SELECT $dbValue, $dbOption FROM $dbTable";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($option_id, $option_name);
    while ($stmt->fetch()) {
        echo "<option value=$option_id>$option_name</option>";
    }

    $stmt->free_result();
    $db->close();
}

function create_htmltag_select_storey() {
    $db = connectDB();
    $query = "SELECT id, name, link
              FROM storey";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($storey_id, $storey, $storey_link);
    while ($stmt->fetch()) {
        echo "<option value=$storey_id class=$storey_link>$storey</option>";
    }

    $stmt->free_result();
    $db->close();
}

function create_htmltag_select_trade() {
    $db = connectDB();
    $query = "SELECT t.id, t.name
              FROM trade as t, user as u
              WHERE u.trade = t.id AND u.username = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $_SESSION['valid_user']);
    $stmt->execute();
    $stmt->bind_result($trade_id, $trade);
    while ($stmt->fetch()) {
        echo "<option value=$trade_id>$trade</option>";
    }

    $stmt->free_result();
    $db->close();
}

function create_htmltag_userinfo() {
    if ($_SESSION['role'] != 'Administrator') {
        $db = connectDB();
        $query = "SELECT t.name, c.name
                FROM trade as t, company as c, user as u
                WHERE u.trade = t.id AND t.company = c.id AND u.username = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $_SESSION['valid_user']);
        $stmt->execute();
        $stmt->bind_result($trade, $company);
        while ($stmt->fetch()) {
            echo "<p>Trade: $trade</p>";
            echo "<p>Company: $company</p>";
        }

        $stmt->free_result();
        $db->close();
    }
}

function create_htmltag_trRecord() {
    $db = connectDB();
    $query = "SELECT T.name, SR.date, S.name, GX1.grid, GX2.grid,
              GY1.grid, GY2.grid, SR.workers_qty, SR.description,
              SR.status
              FROM trade as T, submitted_record as SR, storey as S,
              gridX as GX1, gridX as GX2, gridY as GY1, gridY as GY2, user as U
              WHERE SR.trade = T.id
              AND SR.storey = S.id
              AND SR.gridX1 = GX1.id
              AND SR.gridX2 = GX2.id
              AND SR.gridY1 = GY1.id
              AND SR.gridY2 = GY2.id
              AND SR.trade = U.trade
              AND U.trade = T.id
              AND U.username = '".$_SESSION['valid_user']."'
              ORDER BY SR.date DESC";
              
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($trade, $date, $storey, $gridX1, $gridX2,
                       $gridY1, $gridY2, $workers_qty, $description, $status);
    
    while ($stmt->fetch()) {
        echo '<tbody>';
        echo '<tr>';
        echo '<td>'.$date.'</td>';
        echo '<td>'.$trade.'</td>';
        echo '<td>'.$storey.'</td>';
        echo '<td>'.$gridX1.'-'.$gridX2.' / '.$gridY1.'-'.$gridY2.'</td>';
        echo '<td>'.$workers_qty.'</td>';
        echo '<td>'.$description.'</td>';
        echo '<td>'.$status.'</td>';
        echo '</tr>';
        echo '</tbody>';
    }

    $stmt->free_result();
    $db->close();
}

function create_htmltag_trRecord_admin() {
    $db = connectDB();
    $query = "SELECT T.name, SR.date, S.name, GX1.grid, GX2.grid,
              GY1.grid, GY2.grid, SR.workers_qty, SR.description,
              SR.status
              FROM trade as T, submitted_record as SR, storey as S,
              gridX as GX1, gridX as GX2, gridY as GY1, gridY as GY2
              WHERE SR.trade = T.id
              AND SR.storey = S.id
              AND SR.gridX1 = GX1.id
              AND SR.gridX2 = GX2.id
              AND SR.gridY1 = GY1.id
              AND SR.gridY2 = GY2.id
              ORDER BY SR.date DESC";
              
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($trade, $date, $storey, $gridX1, $gridX2,
                       $gridY1, $gridY2, $workers_qty, $description, $status);
    
    while ($stmt->fetch()) {
        echo '<tbody>';
        echo '<tr>';
        echo '<td>'.$date.'</td>';
        echo '<td>'.$trade.'</td>';
        echo '<td>'.$storey.'</td>';
        echo '<td>'.$gridX1.'-'.$gridX2.' / '.$gridY1.'-'.$gridY2.'</td>';
        echo '<td>'.$workers_qty.'</td>';
        echo '<td>'.$description.'</td>';
        echo '<td>'.$status.'</td>';
        echo '</tr>';
        echo '</tbody>';
    }

    $stmt->free_result();
    $db->close();
}

function create_htmltag_pending() {
    $db = connectDB();
    $query = "SELECT T.name, SR.date, S.name, GX1.grid, GX2.grid,
              GY1.grid, GY2.grid, SR.workers_qty, SR.description,
              SR.id
              FROM trade as T, submitted_record as SR, storey as S,
              gridX as GX1, gridX as GX2, gridY as GY1, gridY as GY2
              WHERE SR.trade = T.id
              AND SR.storey = S.id
              AND SR.gridX1 = GX1.id
              AND SR.gridX2 = GX2.id
              AND SR.gridY1 = GY1.id
              AND SR.gridY2 = GY2.id
              AND SR.status = 'Pending'
              ORDER BY SR.date DESC";
              
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($trade, $date, $storey, $gridX1, $gridX2,
                       $gridY1, $gridY2, $workers_qty, $description, $id);
    
    for ($i = 1; $stmt->fetch(); $i++) {
        echo '<tbody>';
        echo '<tr>';
        echo '<td>'.$date.'</td>';  
        echo '<td>'.$trade.'</td>';
        echo '<td>'.$storey.'</td>';
        echo '<td>'.$gridX1.'-'.$gridX2.' / '.$gridY1.'-'.$gridY2.'</td>';
        echo '<td>'.$workers_qty.'</td>';
        echo '<td>'.$description.'</td>';
        echo '<td><input type="radio" name="record'.$i.'" value="'.$id.'-Approved">Approve &nbsp&nbsp';
        echo '<input type="radio" name="record'.$i.'" value="'.$id.'-Rejected">Reject</td>';
        echo '</tr>';
        echo '</tbody>';
    }

    $stmt->free_result();
    $db->close();
}
?>