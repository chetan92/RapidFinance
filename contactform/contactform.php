<?php

require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try{
    $mail = new PHPMailer();
    $name = $_POST['name'];
    $email= $_POST['email'];
    $tel= $_POST['tel'];
    $buyOption= $_POST['buyOption'];
    $message= $_POST['message'];
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "rapidfinance2020@gmail.com";
    $mail->Password   = "rapid@12345";
    
    $mail->IsHTML(true);
    $mail->AddAddress('puneetsethi0809@gmail.com', "Admin ");
    $mail->SetFrom("rapidfinance@gmail.com", "Rapid Finance");
     $mail->AddCC("puneet88.cooldude@gmail.com", "Admin");
    $mail->Subject = "New Lead - Rapid Finance";
    $content = "<!DOCTYPE html> <html> <head> <title></title> <meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> <meta name='viewport' content='width=device-width, initial-scale=1'> <meta http-equiv='X-UA-Compatible' content='IE=edge' /> <style type='text/css'> /* CLIENT-SPECIFIC STYLES */ body, table, td, a {-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; } table, td {mso-table-lspace: 0pt; mso-table-rspace: 0pt; } img {-ms-interpolation-mode: bicubic; } /* RESET STYLES */ @font-face {font-family: ''Roboto''; src: url('./fonts/msyhl.ttf'); } img {border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; } table {border-collapse: collapse !important; } body {height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; } /* Custome style classes */ /* Split specific style */ /* iOS BLUE LINKS */ a[x-apple-data-detectors] {color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important; } /* MEDIA QUERIES */ @media screen and (max-width: 480px) {.mobile-hide {display: none !important; } .mobile-center {text-align: center !important; } } /* ANDROID CENTER FIX */ div[style*='margin: 16px 0;'] {margin: 0 !important; } </style> <style type='text/css'> .pmt-link-details-wrapper .pmt-link-details-data {font-size: 1.1em; position: relative; color: #1a1f71; padding: 25px 10px 25px 0; border-bottom: 1px solid #dce0ea; width: calc(100% - 170px); } .pmt-link-details-wrapper .pmt-link-details-pmtContainer {width: 170px; } @media (max-width: 580px) {.pmt-link-details-wrapper .pmt-link-details-data {padding-right: 0; } .pmt-link-details-wrapper .pmt-link-details-data, .pmt-link-details-wrapper .pmt-link-details-pmtContainer {display: block; width: 100%; } } </style> <script src='https://code.jquery.com/jquery-1.12.4.min.js'integrity='sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=' crossorigin='anonymous'></script> </head> <body link='#ffffff' alink='#ffffff' vlink='#ffffff'style='margin: 0 !important; padding: 0 !important; background-color: #e7e7e7; letter-spacing: 0.4px;'bgcolor='#e7e7e7'> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%'style='max-width:600px; box-shadow: -1px 2px 20px 0px; margin-top:20px; margin-bottom:20px; overflow: hidden;'> <tr> <td align='center'style='background-color: #ffffff; background-image: linear-gradient(to bottom, rgba(255,255,255,0.8) 0%,rgba(255,255,255,0.8) 30%,rgba(255,255,255,0.65) 40%,rgba(255,255,255,0.35) 60%,rgba(255,255,255,0.2) 70%,rgba(255,255,255,0.2) 100%);'bgcolor='#e7e7e7'> <!--[if (gte mso 9)|(IE)]> <table align='center' border='0' cellspacing='0' cellpadding='0' width='600'> <tr> <td align='center' valign='top' width='600'> <![endif]--> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%'> <tr style='height: 60px;'> <td style='position: relative;'> <div style='background-color: #630e9c; position: absolute; width: 150%; height: 120%; transform: rotate(-9deg); top: -55%; left: -40%; z-index: 2;'> </div> <div style='position: absolute; width: 40%; height: 100%; right: 0; top: 0; opacity: 0.4; overflow: hidden;'> <div style=' position: absolute; width: 150%; height: 110%; background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 70%, rgba(0, 0, 0, 1) 100%); transform: rotate(-12deg); top: -70%; left: -20%;background-color: #630e9c;'> </div> </div> </td> </tr> <!-- <tr> <td align='center' valign='top' style='font-size:0; padding: 20px;'> --> <!--[if (gte mso 9)|(IE)]> <table align='center' border='0' cellspacing='0' cellpadding='0' width='600'> <tr> <td align='left' valign='top' width='300'> <![endif]--> <!-- <div style='display:inline-block; max-width:100%; min-width:100px; vertical-align:top; width:100%;'> <table align='left' border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width:100%;'> <tr> <td align='center' valign='top' class='mobile-center image-upload'> <h3>RAPID FIANCE</h3> </td> <link rel='stylesheet'href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'> <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet'> </tr> </table> </div> </td> </tr> --> <tr> <td align='center' style='padding: 0 40px 0 40px; color: #6e757a;'> <!--[if (gte mso 9)|(IE)]> <table align='center' border='0' cellspacing='0' cellpadding='0' width='600'> <tr> <td align='center' valign='top' width='600'> <![endif]--> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width:600px;'> <tr> <td align='left'style='font-family: 'Roboto',Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400;line-height: 26px; padding-bottom: 15px; font-weight: 400;'> <center><h2 style='font-size: 28px; color: #f02525; font-family: 'Roboto','Raleway', sans-serif;font-size: 28px; margin-top: 25px; font-weight: 400; color:#e3c417; vertical-align:-webkit-baseline-middle;text-align:center; line-height: 1.5;letter-spacing: 0.1px;'> New Enquiry </h2> </center><p style='margin-bottom: 10px;font-weight: normal;font-size: 15px;line-height: 1.6;font-family: 'Roboto','Open Sans',sans-serif;color:#000000;'> Dear Admin</p> <p style='margin-bottom: 10px;font-weight: normal;font-size: 15px;line-height: 1.6;font-family: 'Roboto','Open Sans',sans-serif;color:#000000;'> You have received a new lead from Rapid Finance. </p> <p style='margin-bottom: 10px;font-weight: normal;font-size: 15px;line-height: 1.6;font-family: 'Roboto','Open Sans',sans-serif;color:#000000;'> Client details are available below </p> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%'style='max-width:100%; display: block; box-sizing: border-box; width: 100%; padding: 0 25px; margin-top: 25px;'bgcolor='#f2f6f7'> <tbody style='display: table; width: 100%;' bgcolor='#f2f6f7'> <tr class='pmt-link-details-wrapper'> <td class='pmt-link-details-data' align='left' valign='middle'> <table style='width: 100%;'> <tr> <td> Client Name </td> <td> clientName </td> </tr> <tr> <td colspan='2'> <hr style='border-width: 0.5px; border-style: solid; opacity: 0.2;'> </td> </tr> <tr> <td> Contact </td> <td> tel </td> </tr> <tr> <td colspan='2'> <hr style='border-width: 0.5px; border-style: solid; opacity: 0.2;'> </td> </tr> <tr> <td> Interested in </td> <td> buyOption </td> </tr> <tr> <td colspan='2'> <hr style='border-width: 0.5px; border-style: solid; opacity: 0.2;'> </td> </tr> <tr> <td> Email Address </td> <td> emal </td> </tr> <tr> <td colspan='2'> <hr style='border-width: 0.5px; border-style: solid; opacity: 0.2;'> </td> </tr> <tr> <td> Message </td> <td> msg </td> </tr> </table> </td> </tr> </tbody> </table> </td> </tr> </tbody> </table> <!--[if (gte mso 9)|(IE)]> </td> </tr></tbody> </table> <![endif]--> </td> </tr> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%'style='max-width:600px; border-top: 3px solid #151F4C;'> <tr> <td align='center'style='padding: 10px 20px; background-color: #ffffff; border-top: 2px solid #dddddd; position: relative; overflow: hidden;'bgcolor='#e7e7e7'> <!--[if (gte mso 9)|(IE)]> <table align='center' border='0' cellspacing='0' cellpadding='0' width='600'> <tr> <td align='center' valign='top' width='600'> <a style='color: #ffffff;'> <![endif]--> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width:600px;'> <tr> <td align='left'style='font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;'> <p style='font-size: 12px; font-weight: 400; line-height: 20px; color: #000000;'> Please do not reply to this email. Emails sent to this address will not be answered. <br> Copyright | Rapid Finance <br> All rights reserved </p> </td> <td style='text-align: right;font-size: 24px;color: #ececec; position: relative; z-index: 2; color: transparent; width: 110px'> <img src='https://www.newgenpayments.com/wp-content/uploads/2017/11/newgen_https://qapay.newgenpayments.com/ngp/images/7a6a696e6a55444c67526f7a5277416c436655702b3865486e334e5567736462776c4c6a312f6b7a4930673dALL.png250-x-53.png'width='100' alt='' style='float:right;'> <br> <!--Social media Buttons--> <a href='https://www.facebook.com/rapidFinance'style='text-decoration: none;'> <img src='https://www.newgenpayments.com/wp-content/uploads/2016/11/newgen_facebook_footer_icon.png'alt='Facebook' style='width:20px'> </a>| <a href='https://www.linkedin.com/company/rapidFinance'style='text-decoration: none;'> <img src='https://www.newgenpayments.com/wp-content/uploads/2016/11/newgen_linkedin_footer_icon.png'alt='Linkedin' style='width:20px'> </a>| <a href='https://twitter.com/rapidFinance'style='text-decoration: none;'> <img src='https://www.newgenpayments.com/wp-content/uploads/2016/11/newgen_twitter_footer_icon.png'alt='Twitter' style='width:20px'> </a> </td> </tr> </table> <div class='c-top-div-3-inner'style='left: auto;right: -20%;transform: rotate(-17deg);top: auto;bottom: -100%; background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 70%, rgba(0, 0, 0, 0.5) 100%);'> </div> <!--[if (gte mso 9)|(IE)]> </a> </td> </tr> </table> <![endif]--> </td> </tr> </table> </table> <!--[if (gte mso 9)|(IE)]> </td> </tr> </table> <![endif]--> </td> </tr> </table> <!--[if (gte mso 9)|(IE)]> </td> </tr> </table> <![endif]--> </body> </html>";
    $content = str_ireplace('clientName',$name,$content);
    $content = str_ireplace('tel',$tel,$content);
    $content = str_ireplace('emal',$email,$content);
    $content = str_ireplace('buyOption',$buyOption,$content);
    $content = str_ireplace('msg',$message,$content);
    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Your request couldnt send";
        // var_dump($mail);
    } else {
        echo "Your request is sent successfully";
    }
}catch (\Exception $e){
  // print_r($e->getMessage());
}
?>