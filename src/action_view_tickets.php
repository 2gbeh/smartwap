<?PHP
$tb = 'ticket';
$enum_admin = sql_column($conn, 'admin', 'username');

if ($_GET['e'] == true) {
    goto_page('edit_ticket.php?e=true&q=' . $_GET['q']);
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
$pager = new Pager($size, 20);
$sql_stmt = 'SELECT user_id, ID FROM `' . $tb . '` ORDER BY ID DESC ' . $pager->clause;
$db_res = sql_query($conn, $sql_stmt);

if (is_array($db_res)) {
    $sn = $pager->off;
    $row = '';
    $rows = '';

    $newMain = new Main($conn);
    foreach ($db_res as $key => $value) {
        $sn += 1;
        $e = $newMain->getTicket($value['ID']);
        $f = $newMain->getAdmin($value['user_id']);

        $row = '<tr>
			<td>' . $sn . '</td>
			<td nw>' . $e['id_buf'] . '</td>
            <td nw>' . $f['bio'] . '</td>
            <td>' . $e['message_buf'] . '</td>
			<td nw>' . $e['date_buf'] . '<br/>' . $e['time_buf'] . '</td>
            <td nw>' . $e['status_buf'] . '</td>
			<td ar>
				<button class="btn btn-pri" onClick="onEdit(' . $value['ID'] . ')" title="Edit">&#9998;</button>
				<button class="btn btn-sec" onClick="onDelete(' . $value['ID'] . ')" title="Delete">&#10006;</button>
			</td>
		</tr>';

        $rows .= $row;
    }
}
