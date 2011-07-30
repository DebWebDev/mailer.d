<?php
$mailto = $got_to;
$subject = "Testing mailer.d : ". $got_subject;
$content = "Test Phase 10.abstraction :\r\n"."\r\nName :". $got_name ."\r\nEmail :". $got_email ."\r\nMessage Body :\r\n". $got_message;
$headers = "From: ". $got_from ."\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\n";
$relocate = "Location: ". $got_redirect;
?>
