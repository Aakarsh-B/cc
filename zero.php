<?php

require 'class/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'mail.creativcuckoo.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'creativcuckoo@creativcuckoo.com';					//Sets SMTP username
		$mail->Password = '%3@y5NKAoe1(';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = "help@creativcuckoo.com";					//Sets the From email address for the message
		$mail->FromName = "Aakarsh";				//Sets the From name of the message
		$mail->AddAddress('help@creativcuckoo.com', 'Sender');		//Adds a "To" address
		$name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["budget"];
        $terms = $_POST["message"];	

        $Body = "";
        $Body .= "Name: ";
        $Body .= $name;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "\n";
        $Body .= "Message: ";
        $Body .= $budget;
        $Body .= "\n";
        $Body .= "Terms: ";
        $Body .= $message;
        $Body .= "\n";
									//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);				
       
         $mail->Subject = 'Registration Confirmation';   //Sets the Subject of the message
         $mail->Body = $Body;
             //An HTML or plain text message body
 if($mail->Send())        //Send an Email. Return true on success or false on error
 {
  echo 'success';
    header('refresh:3;contact-1.html');
     
        
      
 }else{
     
     echo 'failed';
      header('refresh:3;contact-1.html');
     

 }

 ?>