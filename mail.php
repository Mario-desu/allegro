<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['submit'])){
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); // validation if you insert a string
    $betreff = filter_var($_POST["betreff"], FILTER_SANITIZE_STRING); // validation if you insert a string
    $mailFrom = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // validation if you insert an email
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING); // validation if you insert a string



try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.ionos.de';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@webdev.eu';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($mailFrom, $name);
    $mail->addAddress('info@webdev.eu');     //Add a recipient
    $mail->addReplyTo($mailFrom, $name);

    $body = '<h3>Name: '.$name. '<br>E-Mail: '.$mailFrom. '<br> Betreff: '.$betreff. '<br> Nachricht: '.$message. '</h3>';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nachricht von Kontaktformular erhalten';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


header("Location: kontakt.php");

}