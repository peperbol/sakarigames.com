<?php
require "PHPMailer/PHPMailerAutoload.php";

if (isset($_POST['submit'])) {
//  $name = $_POST['name'];
//  $subject = "SMS Bericht";
//  $mailFrom = $_POST['mail'];
//  $message = $_POST['message'];
//
//  $mailTo = $_POST['dest'];
//  $headers = "From: ".$mailFrom;
//  $txt = "Er is een bericht van ".$name.".\n\n".$message;
//
//  mail($mailTo, $subject, $txt, $headers);
//  header("Location: mailsend.php");
    
    

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'sakarigames.com';
        $mail->Port = 465;  
        $mail->Username = 'pepijn@sakarigames.com';
        $mail->Password = 'R0adk1ll!';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="pepijn@sakarigames.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            //$error = "Thanks You !! Your email is sent.";  
           // return $error;
            header("Location: mailsend.php");
        }
    }
    
    $to   = $_POST['dest'];
    $from = 'pepijn@sakarigames.com';
    $name = 'Pepijn';
    $subj = "SMS Bericht";
    $msg = $_POST['message'];
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
    
}
?>


