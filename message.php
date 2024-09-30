<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$website = $_POST["website"];
$message = $_POST["message"];

if( empty($name) ||
    empty($email) ||
    empty($phone) ||
    empty($website) ||
    empty($message)) {
    echo "please fill out all fields";
};

// if(!preg_match("/^[A-Z0-9' ]$/", $name)) {
//     echo "please enter valid name";
// };


$receiver = "001abo001@gmail.com";
$subject = "From: $name";
$sender = "From: $email";
$body = "Name: $name <br>
        Email: $email <br>
        Phone: $phone <br>
        website: $website <br>
        message: $message 
";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("./PHPMailer/src/Exception.php");
require("./PHPMailer/src/PHPMailer.php");
require("./PHPMailer/src/SMTP.php");
// Create a new instance of PHPMailer
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->SMTPDebug = 0;                        // Disable verbose debug output (use 2 for full debugging)
    $mail->isSMTP();                             // Use SMTP
    $mail->Host       = 'smtp.gmail.com';      // Set Mailgun SMTP server
    $mail->SMTPAuth   = true;                    // Enable SMTP authentication
    $mail->Username   = $receiver; // Your Mailgun SMTP username
    $mail->Password   = 'gxxcqwaeprtqtfyd';    // Your Mailgun SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port       = 587;                     // Mailgun SMTP port (587 for TLS)
    // Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($receiver);     // Add a recipient
    // Content
    $mail->isHTML(true);                          // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    // Send the email
    $mail->send();
    echo 'Message has been sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>