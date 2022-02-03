<?PHP
$tb = 'ledger';

if ($_GET['v'] == true) {
    goto_page('view_user.php?v=true&q=' . $_GET['q']);
}

if ($_GET['e'] == true) {
    goto_page('edit_ledger.php?e=true&q=' . $_GET['q']);
}

if ($_GET['d'] == true) {
    $db_res = sql_delete($conn, $tb, 'ID', $_GET['q']);

    if ($db_res > 0) {
        $error = 'Record deleted successfully';
        $errno = 200;
    } else {
        $error = 'Deleted record no longer exist';
        $errno = 300;
    }

}

$size = sql_count($conn, $tb);
$pager = new Pager($size, 25);
$sql_stmt = 'SELECT user_id, ID FROM `' . $tb . '` WHERE type="CR" ORDER BY ID DESC ' . $pager->clause;
$db_res = sql_query($conn, $sql_stmt);

if (is_array($db_res)) {
    $sn = $pager->off;
    $row = '';
    $rows = '';

    $newMain = new Main($conn);
    foreach ($db_res as $key => $value) {
        $sn += 1;
        $e = $newMain->getLedger($value['ID']);
        $f = $newMain->getUser($value['user_id']);

        $row = '<tr>
			<td nw>
				<button class="btn btn-alt" onClick="onView(' . $value['user_id'] . ')" title="View">&#128065;</button>
			</td>
			<td>' . $sn . '</td>
			<td>' . $f['names_buf'] . '</td>
            <td ar>' . $f['wal'] . '.00</td>
			<td ar>' . $f['bal_buf'] . '.00</td>
			<td ar>' . $e['amt_buf'] . '.00</td>
            <td>' . $e['plan_buf'] . '</td>            
			<td nw>' . $e['date_buf'] . '<br/> ' . $e['time_buf'] . '</td>
            <td style="color:' . $e['status_hex'] . ';" nw>' . $e['status_buf'] . '</td>
			<td ar>
				<button class="btn btn-pri" onClick="onEdit(' . $value['ID'] . ')" title="Edit">&#9998;</button>
				<button class="btn btn-sec" onClick="onDelete(' . $value['ID'] . ')" title="Delete">&#10006;</button>
			</td>
		</tr>';

        $rows .= $row;
    }
}

$enum_username = sql_column_distinct($conn, $tb, 'username');
$hint_username = Enums::datalist($enum_username, 'hint_username');
