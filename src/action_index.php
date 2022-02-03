<?PHP
$tb = 'admin';
$nav = $_SESSION['page'] ?: 'view_users.php';
$errno = 400;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);
    $db_res = sql_select_one($conn, $tb, 'username', $post['username']);

    if (is_array($db_res)) {
        if ($post['password'] == $db_res['password']) {
            $_POST = null;
            $error = 'Log in successful';
            $errno = 200;

            set_session('user', $db_res);
            goto_page($nav);
        } else {
            $error = 'Incorrect password';
        }

    } else {
        $error = 'Username not found';
    }

}
