<?php
if (isset($_REQUEST['test'])) { $data = array('name','sender','subject','message','deb.webdev@gmail.com','test@mailer.d','plain','http://google.com'); }

include "parser.php";
include "producer.php";
include "mailer.php";

header("Location: ".$data[7]);
?>
