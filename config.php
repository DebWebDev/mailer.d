<?php
$mailto = "deb.webdev@gmail.com";

if (isset($_REQUEST['name'])) { $sender_name = $_REQUEST['name']; }
if (isset($_REQUEST['sender'])) { $sender_email = $_REQUEST['sender']; }
if (isset($_REQUEST['subject'])) { $subject = "Testing mailer.d : " . $_REQUEST['subject']; }
if (isset($_REQUEST['message'])) { $content = "Test Phase 7 :\r\n" . "\r\nName :" . $sender_name . "\r\nEmail :" . $sender_email . "\r\nMessage Body :\r\n" . $_REQUEST['message']; }
$headers = "From: ". $sender_email ."\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";

include "mailer.php";
?>
