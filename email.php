<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$message="Name: ".$name."<br>Emailid: ".$email."<br>Phone: ".$phone.'<br>'.$message;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'emailneeds/Exception.php';
require 'emailneeds/PHPMailer.php';
require 'emailneeds/SMTP.php';


$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;
$mail->SMTPSecure="ssl";
$mail->Port=465;
$mail->Username='211501043@rajalakshmi.edu.in';
$mail->Password="Password123*";
$mail->setFrom('yuvarecweb@gmail.com');
$mail->addAddress('yiyuva2019@gmail.com');
$mail->isHTML(true);
$mail->Subject = "A MESSAGE FROM WEBSITE";
$mail->Body = $message;
$mail->send();?>
<script type="text/javascript">
alert("Mail sent successfully");
window.location.href = "contact.html";
</script>