<?php

    $username = $_POST['name'];
    $userEmail = $_POST['email'];
    $messagesubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'help@creativcuckoo.com';
    $body = "";

    $body .="From: ".$username." \r\n";
    $body .="mail: ".$userEmail." \r\n";
    $body .="mesg: ".$message." \r\n";

    mail($to, $messagesubject, $body);

?>