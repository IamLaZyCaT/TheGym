<?php

$name = $_POST['Fname'];
$email = $_POST['email'];
$mesg = $_POST['message'];

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <ashishkumal89@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$subject = "Mail from Contact form";
$to = "ashishkumal89@gmail.com";
$to = "amanchaudhary199910@gmail.com";
$message = "Name: " . $name .
            "<br> Email:" . $email . 
            "<br> Message:" . $mesg;

            if(mail($to,$subject,$message,$headers)){
                echo"success";
           }

        else{
            echo"error";
        }
        
?>