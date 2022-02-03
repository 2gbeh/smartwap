<?PHP
$tb = 'ledger';
$tb_2 = 'user';
$errno = 400;

if ($_GET['e'] == true) {
    $newMain = new Main($conn);
    $row_ledger = $newMain->getLedger($_GET['q']);
    $row_user = $newMain->getUser($row_ledger['user_id']);
}

// var_dump($_POST, $_FILES);
// return 1;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);
    // UPDATE LEDGER STATUS
    $new_post = array('STATUS' => $post['STATUS']);
    $db_res = sql_update($conn, $tb, $new_post, 'ID', $_POST['ID']);

    if (is_numeric($db_res)) {
        // UPDATE USER BALANCE WHEN APPROVED ONLY
        if ($post['type'] == 'CR' && $post['STATUS'] == 1) {
            $new_bal = (int)$post['amt'] + (int)$post['bal'];
            $post_2 = array('bal' => $new_bal);
            $db_res_2 = sql_update($conn, $tb_2, $post_2, 'ID', $post['user_id']);            
        }

        $error = 'Record updated successfully';
        $errno = 200;
        goto_page('?err=' . $error . '&errno=' . $errno . '&e=true&q=' . $_POST['ID']);
    } else {
        $error = $db_res;
    }
}

$ddl_status = Enums::option(Lists::TRANSACTION, $row_ledger['STATUS']);
