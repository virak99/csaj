<?php
    $to = 'committee@csaj-khmer.org';
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $from = 'info@csaj-khmer.org';

    $subject = "New message from CSAJ Website";
    $body = "From: ".$name." <".$email."><br>";
    $body .= "Message: ".$message;
    
    
    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8";

    if (mail($to,$subject,$body,$headers)){
        echo 'success';
    }

?>