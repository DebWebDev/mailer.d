<?php
if ( isset($_REQUEST['query'])) {
$mailto = "deb.webdev@gmail.com";
$subject = "Testing mailer.d";
$content = "Test Phase 3.pass";
$headers = "From: deb.webdev@gmail.com\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";
} else {
$mailto = "deb.webdev@gmail.com";
$subject = "Testing mailer.d";
$content = "Test Phase 3.fail";
$headers = "From: deb.webdev@gmail.com\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";
}

include "mailer.php";
?>
