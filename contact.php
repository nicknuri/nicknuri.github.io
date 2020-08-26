<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
    
    require 'phpmailer/get_oauth_token.php';

    function sendemail($to, $from, $fromName, $subject, $message){
    $mail=new PHPMailer();
    $mail->setFrom($from, $fromName);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Message = $message;
    $mail->isHTML(false) ;
    
    return $mail->send();

    }

 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    
    
    if(sendemail($to='burkhonov.nuriddin@gmail.com' , $name, $email, $subject, $message)){
        echo "<h1>Sent successfully! I will contact you soon! </h1>";

    }else{
            echo "Check your details again. Something went wrong!";
        }

    
}

?>