<?php
if (isset($_REQUEST['test'])) { $data = array('name','sender','subject','message','deb.webdev@gmail.com','test@mailer.d','plain'); }

include "parser.php";
include "producer.php";
include "mailer.php";
?>
