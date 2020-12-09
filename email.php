
<?php 
  require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");


    $mail = new PHPMailer\PHPMailer\PHPMailer();


$mail->From = "info@cyford.com";
$mail->FromName = "cyford";

//To address and name
$mail->addAddress("bilalshahzad2791@gmail.com", "bilal");
$mail->addAddress("bilalshahzad2791@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("bilalshahzad2791@gmail.com", "Reply");

//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
    
?>