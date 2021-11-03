<?php
require('main.php');
include('smtp/PHPMailerAutoload.php');

$mail = new PHPMailer(true); 

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $radiobutton = $_POST['radiobutton'];
    $message = $_POST['message'];
}
	$mail->isSMTP();
    $mail->Host = "smtp.gmail.com"; 
    $mail->SMTPAuth = true; 
    $mail->Username = "mrogala.arkonsoft@gmail.com"; 
    $mail->Password = 'TDW8961ndd'; 
    $mail->Port = 587; 
    $mail->SMTPSecure = 'tls';  
    $mail->setFrom('mrogala.arkonsoft@gmail.com');
    $mail->addAddress('mrogala.arkonsoft@gmail.com');
    $mail->isHTML(true);
    $mail->Subject='Masin';
	$mail->Body='<h3>FirstName :' .$_POST['firstname']. '<br>LastName :' .$_POST['lastname']. '<br>Email :' .$_POST['email']. '<br>Phone :' .$_POST['phone']. '<br>Check :' .$_POST['radiobutton']. '<br>Message :' .$_POST['message'];
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
