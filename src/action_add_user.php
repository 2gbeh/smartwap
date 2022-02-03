<?PHP
$tb = 'user';
$errno = 400;

//var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);
    $db_res = sql_insert($conn, $tb, $post);

    if (is_numeric($db_res)) {
        $_POST = null;
        $error = 'Record saved successfully';
        $errno = 200;
    } else {
        $error = $db_res;
    }
}

$enum_ref = sql_column_distinct($conn, $tb, 'ref');
$hint_ref = Enums::datalist($enum_ref, 'hint_ref');
