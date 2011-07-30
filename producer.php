<?php
$mailto = $got_to;
$subject = "Testing mailer.d : ". $got_subject;
$content = "Test Phase 8.huge :\r\n"."\r\nName :". $got_name ."\r\nEmail :". $got_email ."\r\nMessage Body :\r\n". $got_message;
$headers = "From: ". $got_from ."\r\nMIME-Version: 1.0\r\nContent-Type: text/". $got_format ."; charset=utf-8\r\n";
?>
