<?php
$adsoyad=$_POST['adsoyad'];
$email=$_POST['email'];
$konu=$_POST['konu'];
$mesaj=$_POST['mesaj'];

if (isset($_POST['mailsend'])) {
	
	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.kurumsaleposta.com";
	$mail->SMTPAuth = true;
	$mail->Username = "";
	$mail->Password = "";
	$mail->From = "ornek@alanadiniz.com";
	$mail->Fromname = $adsoyad;
	$mail->AddAddress(" ","Mail Sent");
	$mail->AddReplyTo("$email", 'Reply to name');
	$mail->Subject = "$konu";
	$mail->Body = "$mesaj";
	$mail->CharSet = "UTF-8";

	if(!$mail->Send())
	{}}
?>

