<?PHP
$tb = 'user';

if ($_GET['s'] == true) {
    $row = sql_select_one($conn, $tb, 'username', $_GET['q']);
    goto_page('view_user.php?v=true&q=' . $row['ID']);
}

if ($_GET['v'] == true) {
    goto_page('view_user.php?v=true&q=' . $_GET['q']);
}

if ($_GET['e'] == true) {
    goto_page('edit_user.php?e=true&q=' . $_GET['q']);
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
$sql_stmt = 'SELECT ID FROM `' . $tb . '` ORDER BY ID DESC ' . $pager->clause;
$db_res = sql_query($conn, $sql_stmt);

if (is_array($db_res)) {
    $sn = $pager->off;
    $row = '';
    $rows = '';

    $newMain = new Main($conn);
    foreach ($db_res as $key => $value) {
        $sn += 1;
        $e = $newMain->getUser($value['ID']);

        $row = '<tr>
			<td nw>
				<button class="btn btn-alt" onClick="onView(' . $e['ID'] . ')" title="View">&#128065;</button>
			</td>
			<td>' . $sn . '</td>
			<td>' . $e['names_buf'] . '</td>
            <td>' . $e['email_buf'] . '</td>
			<td>' . $e['wal'] . '</td>
            <td ar>' . $e['bal_buf'] . '</td>
            <td ar>' . $e['bonus_buf'] . '</td>
			<td nw>' . $e['date_buf'] . '<br/> ' . $e['time_buf'] . '</td>
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
