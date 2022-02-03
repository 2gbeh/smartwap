<?PHP
$tb = 'user';
$dir = 'img/';
$errno = 400;

if ($_GET['v'] == true) {
    $ID = $_GET['q'];
}

$newMain = new Main($conn);
$row = $newMain->getAdmin($ID);

$passport_buf = $dir . 'user.png';

if (!is_array($row)) {
    $error = 'Selected account does not exist';    
}
