<?php 

$message_sent = false;
$sent_message = '';

if (isset($_POST['submit'])) {
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); // validation if you insert a string
    $betreff = filter_var($_POST["betreff"], FILTER_SANITIZE_STRING); // validation if you insert a string
    $mailFrom = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // validation if you insert an email
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING); // validation if you insert a string


    $mailTo = "info@mariodev.eu";
    $headers = "From: ".$mailFrom;
    $txt = "Du hast eine E-Mail erhalten von ".$name.".\n\n".$message;

    mail($mailTo, $betreff, $txt, $headers);

    $message_sent = true;

    if ($message_sent = true) {
        $sent_message = 'Nachricht gesendet!';
        
    } else {
        $sent_message = 'Nachricht nicht gesendet!';
    }

    header("Location: kontakt.php?mailsend");
}


// if($_SERVER["REQUEST_METHOD"] == 'POST'){ // Check if user is coming from a request
//         $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // validation if you insert an email
//         $msg = filter_var($_POST["msg"], FILTER_SANITIZE_STRING); // validation if you insert a string

//         // mail function in php look like this  (mail(To, subject, Message, Headers, Parameters))
//         $headers = "FROM : ". $email . "\r\n";
//         $myEmail = "vie.mario@yahoo.ca";
//         if(mail($myEmail, "Nachricht von Kontaktformular", $msg, $headers)){
//                 echo "Nachricht gesendet";
//         }else {
//                 echo "error";
//         }

// }

