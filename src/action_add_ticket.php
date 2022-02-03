<?PHP
$tb = 'ticket';
$errno = 400;

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
