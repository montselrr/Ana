<?php

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = ['samantha.rdrzc@gmail.com'];
$headers = "From: ".$mailFrom;
$txt = "Recibiste un mail de ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);

}