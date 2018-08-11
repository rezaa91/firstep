<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'auth.smtp.1and1.co.uk';                // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@firstep.uk';                  // SMTP username
    $mail->Password = getenv(email_pass);                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


$outgoing = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $outgoing->isSMTP();                                      // Set mailer to use SMTP
    $outgoing->Host = 'auth.smtp.1and1.co.uk';                // Specify main and backup SMTP servers
    $outgoing->SMTPAuth = true;                               // Enable SMTP authentication
    $outgoing->Username = 'info@firstep.uk';                  // SMTP username
    $outgoing->Password = getenv(email_pass);                        // SMTP password
    $outgoing->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $outgoing->Port = 587;                                    // TCP port to connect to

    $outgoing->From = 'info@firstep.uk';
    $outgoing->FromName = 'Firstep';


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

