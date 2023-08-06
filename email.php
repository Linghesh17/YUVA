<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$message="Name: ".$name."<br>Emailid: ".$email."<br>Phone: ".$phone.'<br>'.$message;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


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
$mail->setFrom('attendanceregister@gmail.com');
$mail->addAddress('211501043@rajalakshmi.edu.in');
$mail->isHTML(true);
$mail->Subject = "A MESSAGE FROM WEBSITE";
$mail->Body = $message;
$mail->send();?>
<script>
alert("Mail sent successfully");
window.open("contact.html","_blank");</script>

