<?php include_once 'inc/top.inc.php';?>
<?php
require_once 'lib/php-mailer/Exception.php';
require_once 'lib/php-mailer/PHPMailer.php';
require_once 'lib/php-mailer/SMTP.php';
require_once 'lib/php-mailer/main.php';

$body = php_mailer_grid($_SERVER, 'Contact us form details');
$send = php_mailer_send(
  'hwplabs.com', 
  'no-reply@hwplabs.com', 
  '_Strong@ssw0rd', 
  ['no-reply@hwplabs.com', 'HWP Labs'],
  ['dehphantom@yahoo.com','tugbeh.osaretin@gmail.com'], 
  'Message from HWP Labs contact us page',
  $body, 
  $_POST['email']
);

echo $body;

$newMain = new Main($conn);
$newAmin = new Admin($conn);
var_dump(
    // $newMain->getAdmin(1),
    // $newMain->getContact(1),
    // $newMain->getLedger(32),
    // $newMain->getTicket(1),
    // $newMain->getUser(1)
    // $newAmin->getDeposits(),
    // $newAmin->getWithdrawals()
);
?>
  <main class="tmp-landing">
    <form class="tmp-form tmp-form-login" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <input type="file" name="file" required />
        <button class="pri">Submit</button>
      </fieldset>
    </form>
<?php include_once 'inc/end_alt.inc.php';?>
