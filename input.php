<?php
// import webpage template
require('auth.php');
require('Template/header.php');
require('Template/menu.php');
require('create_htmltag.php');
// define variable for role verify
$role = $_SESSION['role'];

// verify the role should be Admin
if ($role == 'Administrator') {
    echo '<div class="inner-page">';
    echo '<p>You are not allowed to access this page.</p>';
    exit();
}
?>
<div class="inner-page">
    <h2>Submit Site Progress</h2>
    <form action="submit-results.php" method="POST">
        <table id="submit-table">
            <thead class="table-header">
                <tr class="table-header-row">
                    <th class='table-header-text'>Trade</th>
                    <th class='table-header-text'>Date</th>
                    <th class='table-header-text'>Storey</th>
                    <th class='table-header-text'>Grid</th>
                    <th class='table-header-text'>Workers</th>
                    <th class='table-header-text'>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select id="trade-input" class="input-data" name="trade">
                            <?php
                            if ($role == 'Administrator') {
                                create_htmltag_select('trade', 'id', 'name');
                            }
                            else {
                                create_htmltag_select_trade();
                            }    
                            ?>
                        </select>
                    </td>
                    <td>
                        <input id="date-input" class="input-data" type="date" name="date" />
                    </td>
                    <td>
                        <select id="storey-input" class="input-data" name="storey">
                            <?php
                            create_htmltag_select_storey();
                            ?>
                        </select>
                    </td>
                    <td>
                        <select id="gridX-input1" class="input-data" name="gridX1" />
                            <?php
                            create_htmltag_select('gridX', 'id', 'grid');
                            ?>
                        </select> - 
                        <select id="gridX-input2" class="input-data" name="gridX2" />
                            <?php
                            create_htmltag_select('gridX', 'id', 'grid');
                            ?>
                        </select> / 
                        <select id="gridY-input1" class="input-data" name="gridY1" />
                            <?php
                            create_htmltag_select('gridY', 'id', 'grid');
                            ?>
                        </select> -  
                        <select id="gridY-input2" class="input-data" name="gridY2" />
                            <?php
                            create_htmltag_select('gridY', 'id', 'grid');
                            ?>
                        </select>
                    </td>
                    <td>
                        <input id="workers-input" class="input-data" type="number" name="workers" />
                    </td>
                    <td>
                        <textarea id="descirption-input" class="input-data" name="description" rows="1" cols="1"></textarea>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input id="submit_btn" class="input-data" type="submit" value="Submit" /></td>
            </tfoot>
        </table>
    </form>
    <br/>
    <iframe id="dwg-frame" src="Drawings/ground_floor.pdf"></iframe>
</div>
</body>
</html>
