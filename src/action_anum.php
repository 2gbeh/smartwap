<?PHP
$nav = 'index.php';
$errno = 400;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (Anum::upload()) {
        alert('Software License Activated!');
        goto_page($nav);
    } else {
        $error = 'Invalid software license. Try again.';
    }

}
