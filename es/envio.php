<?php
require 'corr/PHPMailerAutoload.php';

 $de= $_POST['name'];
 $remitente=  $_POST['de_email'];
 $telefono=  $_POST['tel'];
 $mensaje=  $_POST['el_body'];



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'leads.dacotrans@gmail.com';                 // SMTP username
$mail->Password = '27071990';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->from = $remitente;
$mail->FromName = $de;
$mail->setFrom($remitente, 'Contacto via web');


$mail->addReplyTo($remitente, $de);
$mail->addAddress('soporte@dacotrans.com.gt', 'User');     // Add a recipient
$mail->addAddress('crisoftpc@yahoo.com','sistema');               // Name is optional
//$mail->addCC('soporte@dacotrans.com.gt');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'test';
$mail->Body    = $mensaje;
$mail->AltBody = $mensaje;

if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header('Location:/'.$_COOKIE['ultima_sesion'].'/index.php');
} else {
//    echo 'Message has been sent';
    header('Location:/'.$_COOKIE['ultima_sesion'].'/index.php');
}
?>
