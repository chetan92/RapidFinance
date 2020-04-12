<?php
require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "chetanchadha92@gmail.com";
    $mail->Password   = "newgen@2016";
    
    $mail->IsHTML(true);
    $mail->AddAddress("chetanchadha92@gmail.com", "chetan ");
    $mail->SetFrom("chetanchadha92@gmail.com", "Rapid Finance");
    // $mail->AddCC("<cc-address>", "<cc-name>");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
    
    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
        // var_dump($mail);
    } else {
        echo "Email sent successfully";
    }
}catch (\Exception $e){
  echo "<pre>";
  print_r($e->getMessage());
}


?>