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
ini_set('display_errors', 1);


//Email settings
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//incoming emails
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'auth.smtp.1and1.co.uk';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@firstep.uk';                 // SMTP username
    $mail->Password = 'Issaee50!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


//outgoing emails
$outgoing = new PHPMailer;                              // Passing `true` enables exceptions
try {
    //Server settings
    $outgoing->isSMTP();                                      // Set mailer to use SMTP
    $outgoing->Host = 'auth.smtp.1and1.co.uk';  // Specify main and backup SMTP servers
    $outgoing->SMTPAuth = true;                               // Enable SMTP authentication
    $outgoing->Username = 'info@firstep.uk';                 // SMTP username
    $outgoing->Password = 'Issaee50!';                           // SMTP password
    $outgoing->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $outgoing->Port = 587;                                    // TCP port to connect to

    $outgoing->From = 'info@firstep.uk';
    $outgoing->FromName = 'Firstep';


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $outgoing->ErrorInfo;
}


//include templates on every page
require_once 'includes/header.html';
require_once 'includes/navigation.html';


?>