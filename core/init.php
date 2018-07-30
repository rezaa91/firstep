<?php

session_start(); //begin session

//configuration array
$GLOBALS['congig'] = array(
    'mysql' => array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db' => 'firstep'
    )
);

//auto load classes when instantiated
function class_loader($class){
    require_once 'classes/' .$class .'.php';
}

spl_autoload_register('class_loader');


//display errors
ini_set('display_errors', 0);


//Email settings
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'imap.1and1.co.uk';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@firstep.uk';                 // SMTP username
    $mail->Password = 'Issaee50!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 993;                                    // TCP port to connect to

    //Recipients
    $mail->addAddress('info@firstep.uk');     // Add a recipient

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


//include templates on every page
require_once 'includes/header.html';
require_once 'includes/navigation.html';


?>