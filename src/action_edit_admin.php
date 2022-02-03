<?PHP
$tb = 'admin';
$errno = 400;

if ($_GET['e'] == true) {
    $_POST = sql_select_id($conn, $tb, $_GET['q']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);
    $db_res = sql_update($conn, $tb, $post, 'ID', $_POST['ID']);

    if (is_numeric($db_res)) {
        $error = 'Record updated successfully';
        $errno = 200;
    } else {
        $error = $db_res;        
    }
}

$ddl_status = Enums::option(Lists::ADMIN, $_POST['STATUS']);
