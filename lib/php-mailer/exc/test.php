<?php
require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'adidas.adesclaim.com'; #webmail domain
    $mail->SMTPAuth   = true;
    $mail->Username   = 'no-reply@adidas.adesclaim.com'; #webmail username
    $mail->Password   = '_Strongp@ssw0rd'; #webmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    
    // Mail parameters
    $mail->setFrom('no-reply@adidas.adesclaim.com', 'Adidas Corporation');
    $mail->addAddress('dehphantom@yahoo.com');
    $mail->addAttachment('./adidas.JPG', 'adidas.gif');
    $mail->isHTML(true);
    $mail->Subject = 'Adidas Official Promo';
    $mail->Body    = 'Your claim process has been completed successfully.<p></p>
    Your assigned <b>Claims Agent</b> will be in touch with you to provide you further information on the claims procedure.<p></p>
    Congratulations as we hope you are able to utilize your winnings towards development of yourself, family and society at large.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
}
?>