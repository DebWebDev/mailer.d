<?php
if ($_REQUEST['config'] == "Send") {
$mailto = "deb.webdev@gmail.com";
$subject = "Testing mailer.d";
$content = "Test Phase 4.pass";
$headers = "From: deb.webdev@gmail.com\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";
} else {
$mailto = "deb.webdev@gmail.com";
$subject = "Testing mailer.d";
$content = "Test Phase 4.fail";
$headers = "From: deb.webdev@gmail.com\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";
}

include "mailer.php";
?>
