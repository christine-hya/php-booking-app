<?php
$jsonUserinfo = file_get_contents('userinfo.json');
$userInfo = json_decode($jsonUserinfo, true);

$numberOfDays = $userInfo['numberOfDays'];
$hotelName = $userInfo['hotel'];
$name = $userInfo['name'];
$surname = $userInfo['surname'];
$emailAddress = $userInfo['emailAddress'];
$checkInDate = $userInfo['checkInDate'];
$checkOutDate = $userInfo['checkOutDate'];

use PHPMailer\PHPMailer\PHPMailer;
require 'C:\MAMP\composer\vendor\autoload.php';


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'fbac85340577e6';
$mail->Password = '386b57287326ea';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

$mail->setFrom('info@mailtrap.io', 'Mailtrap');
$mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
$mail->addAddress('recipient1@mailtrap.io', 'Tim');

$mail->isHTML(true);

$mail->Subject = 'Booking Received';

$mailContent = "<h5>Dear hotel manager</h5>
    You have received the following booking for " 
    . $hotelName . ".<br><br><strong>Guest details</strong><br>Name: " . $name . " " . $surname
    . "<br>Email: " . $emailAddress . "<br>Duration of stay: " . $numberOfDays
    . " nights <br>Check-in date: " . $checkInDate . "<br>Check-out date: " . $checkOutDate;

$mail->Body = $mailContent;

if($mail->send()){
    echo 'Your booking was successful. A confirmation email has been sent to notify the hotel manager.';
}else{
    echo 'Booking could not be confirmed.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>