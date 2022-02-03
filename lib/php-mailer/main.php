<?php
// REQUIRE BELOW IN ACTION PAGE
// require_once 'lib/php-mailer/Exception.php';
// require_once 'lib/php-mailer/PHPMailer.php';
// require_once 'lib/php-mailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Ex. $body = php_mailer_grid($_SERVER, 'Contact us form details');
function php_mailer_grid($post, $title = '&nbsp;')
{
    $css = '<style type="text/css">
        table.pmt {font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;}
        table.pmt {border-collapse:collapse; width:100%; font-size:14px;}
        table.pmt caption {border-bottom:solid; padding:12px; text-align:left; text-transform:uppercase; letter-spacing:1px; font-weight:bold;}
        table.pmt tr {border-bottom:solid thin #ddd;}
        table.pmt tr th {padding:12px 5px; text-align:left; vertical-align:top; white-space:nowrap; cursor:default;}
        table.pmt tr td {padding:12px 5px;}
    </style>';
    $caption = '<caption>' . $title . '</caption>';
    $tbody = '';
    foreach ($post as $key => $value) {
        $th = '<th>' . $key . '</th>';
        $td = '<td>: ' . $value . '</td>';
        $tr = '<tr>' . $th . $td . '</tr>';
        $tbody .= $tr;
    }
    $table = '<table border="0" class="pmt">' . $caption . $tbody . '</table>';
    return $css . $table;
}

/* Ex. 
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
*/
function php_mailer_send($domain, $username, $password, $from, $to, $subject, $body, $reply_to = null, $attach = null)
{
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = $domain; #webmail domain
        $mail->SMTPAuth = true;
        $mail->Username = $username; #webmail username
        $mail->Password = $password; #webmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = $subject;

        // FROM: array('contact@hwplabs.com','HWP Labs')
        if (is_array($from)) {
            $mail->setFrom($from[0], $from[1]);
        } else {
            $mail->setFrom($from);
        }

        // TO: array('dehphantom@yahoo.com','tugbeh.osaretin@gmail.com')
        if (is_array($to)) {
            foreach ($to as $e) {
                $mail->addAddress($e);
            }
        } else {
            $mail->addAddress($to);
        }

        // BODY: array('Hello, World!<p></p>','Hello, World!\n')
        if (is_array($body)) {
            $mail->Body = $body[0];
            $mail->AltBody = $body[1];
        } else {
            $mail->Body = $body;
        }

        // REPLY-TO: array('dehphantom@yahoo.com','tugbeh.osaretin@gmail.com')
        if (!is_null($reply_to)) {
            if (is_array($reply_to)) {
                foreach ($reply_to as $e) {
                    $mail->addReplyTo($e);
                }
            } else {
                $mail->addReplyTo($reply_to);
            }
        }

        // ATTACH: array('./img/logo.png','./img/salute.png') OR https://hwplabs.com/img/logo.png
        if (!is_null($attach)) {
            if (is_array($attach)) {
                foreach ($attach as $e) {
                    $mail->addAttachment($e);
                }
            } else {
                $mail->addAttachment($attach);
            }

        }

        $mail->isHTML(true);
        $mail->send();
        return true;
    } catch (Exception $e) {
        return $mail->ErrorInfo;
    }
}
