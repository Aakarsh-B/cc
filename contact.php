<!DOCTYPE html>
<html lang="en">
<head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $budget = $_POST["budget"];
    $terms = $_POST["message"];


$EmailTo = "help@creativcuckoo.com";
$Subject = "New message from creativcuckoo landing page";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Budget: ";
$Body .= $budget;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $message;
$Body .= "\n";

// send email


mail($EmailTo, $Subject, $Body);     //Send an Email. Return true on success or false on error

echo 'sent successfully';

?>

</html>