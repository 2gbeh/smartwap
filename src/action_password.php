<?PHP
$tb = 'admin';
$nav = 'index.php';
$errno = 400;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);

    if ($post['password'] == $_POST['old_password']) {
        if ($post['password'] == $post['new_password']) {
            $error = 'New password and current password cannot be the same';
        } else if ($post['new_password'] != $post['cfm_password']) {
            $error = 'New password and confirm password does not match';
        } else {
            $post = array('password' => $post['new_password']);
            $db_res = sql_update($conn, $tb, $post, 'ID', $_POST['ID']);

            if (is_numeric($db_res)) {
                $_POST = null;
                $error = 'Password updated successfully. Log in to continue';
                $errno = 200;

                session_destroy();
                goto_page($nav . '?err=' . $error);
            } else {
                $error = $db_res;
            }

        }
    } else {
        $error = 'Current password is incorrect';
    }

}
