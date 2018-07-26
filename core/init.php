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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mailtrap.io';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = ' fe9884b4bcaf9c';                 // SMTP username
    $mail->Password = ' 9a7269bd98a964';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 2525;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@firstep.uk', 'Mailer');
    $mail->addAddress('info@firstep.uk', 'Joe User');     // Add a recipient
   

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


//include templates on every page
require_once 'includes/header.html';
require_once 'includes/navigation.html';


?>