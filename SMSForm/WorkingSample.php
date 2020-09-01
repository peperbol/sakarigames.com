<?php




//$result="";

require "PHPMailer/PHPMailerAutoload.php";

if (isset($_POST['submit'])){
   

//function smtpmailer($to, $from, $from_name, $subject, $body)

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'sakarigames.com';
        $mail->Port = 465;  
        $mail->Username = 'pepijn@sakarigames.com';
        $mail->Password = 'R0adk1ll!';   
   
        $mail->IsHTML(true);
        $mail->SetFrom('pepijn@sakarigames.com');
        $mail->Subject = 'Onderwerp';
        $mail->Body = 'inhoud';
        $mail->AddAddress('0032487551238@email2sms.gr');
        $mail->Send();
    
     echo '<script>alert("Welcome to Geeks for Geeks")</script>';
}
//        if(!$mail->Send())
//        {
//            $error ="Please try Later, Error Occured while Processing...";
//            return $error; 
//        }
//        else 
//        {
//            $error = "Thanks You !! Your email is sent.";  
//            return $error;
//        }
//    }
//
//    
//    $to   = '0032487551238@sms.clicksend.com';
//    $from = 'pepijn@sakarigames.com';
//    $name = 'Pepijn';
//    $subj = 'PHPMailer 5.2 testing from DomainRacer';
//    $msg = 'This is mail about testing mailing using PHP.';
//    
//    $error=smtpmailer($to,$from, $name ,$subj, $msg);
//    
?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="post">
    <?php echo $error; ?>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="submit" name="submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
