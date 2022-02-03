<?PHP
$tb = 'user';
$dir = 'uploads/';
$errno = 400;

if ($_GET['e'] == true) {
    goto_page('edit_user.php?e=true&q=' . $_GET['q']);
}

if ($_GET['d'] == true) {
    goto_page('view_users.php?d=true&q=' . $_GET['q']);
}

if ($_GET['v'] == true) {
    //Main::keylog($conn,2);

    $newMain = new Main($conn);
    $db_res = $newMain->getUser($_GET['q']);
    if (is_array($db_res)) {
        $row = $db_res;
        $nav_user_login = '../../account/login.php?username='.$row['username'].'&password=' . $row['password'];
        $passport_buf = $dir . 'default.png';
    } else {
        $error = 'Selected account does not exist';        
    }
}
