<?PHP
$tb = 'user';
$errno = 400;

if ($_GET['e'] == true) {
    $_POST = sql_select_id($conn, $tb, $_GET['q']);
}

//var_dump($_POST, $_FILES);
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

$enum_ref = sql_column_distinct($conn, $tb, 'ref');
$hint_ref = Enums::datalist($enum_ref, 'hint_ref');
