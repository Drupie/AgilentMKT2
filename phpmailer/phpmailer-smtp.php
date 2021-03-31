<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$escuela=$_POST['institucion'];

/**
* This example shows making an SMTP connection with authentication.
*/
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//Create a new PHPMailer instance
require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.ionos.mx';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'saul.alejo@diime.mx';
//Password to use for SMTP authentication
$mail->Password = 'Goget@048';
//Set who the message is to be sent from
$mail->setFrom('saul.alejo@diime.mx', $email.'analisis-superficial-BET');
//Set an alternative reply-to address
$mail->addReplyTo('aleparatu@gmail.com', 'remitente');
//Set who the message is to be sent to
$mail->addAddress('saul.alejo@diime.mx', 'Anyover-BET');
//Set the subject line
$mail->Subject = 'Solicito';
$mail->Body = 
'Hola mi nombre es '.$nombre.' solicito informes sobre un BET '.' mi correo es '.$email.' mi escuela es '.$escuela;


//send the message, check for errors
if (!$mail->send()) {
echo 'Mailer Error: ';
header("location:feedback.html");
echo '<h1>Algo salio Mal</h1>';
} else {
    $x=0;

} 
return 0;
if($x==0){
    echo '<h1>Pronto nos pondremos en contacto</h1>';
    header('Location: ../feedback.html');
}