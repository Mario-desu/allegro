<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$mail = new PHPMailer(true);

$alert = '';


if (isset($_POST['submit'])){
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); // validation if you insert a string
    $betreff = filter_var($_POST["betreff"], FILTER_SANITIZE_STRING); // validation if you insert a string
    $mailFrom = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // validation if you insert an email
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING); // validation if you insert a string


    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.ionos.de';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@webdev.eu';
        $mail->Password = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('info@webdev.eu');
        $mail->addAddress('info@webdev.eu');

        $mail->isHTML(true);
        $mail->Subject = 'Nachricht von Kontaktformular erhalten';
        $mail->Body = '<h3>Name: '.$name. '<br>E-Mail: '.$mailFrom. '<br> Betreff: '.$betreff. '<br> Nachricht: '.$message. '</h3>';

        $mail->send();
        $alert='div class="alert-success">
                    <span>Nachricht gesendet! Vielen Dank.</span>
                </div>';
    }catch(Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
    }

    header("Location: kontakt.php?mailsend");

}
