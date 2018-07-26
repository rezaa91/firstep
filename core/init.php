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


//Email settings
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Charset = "UTF-8";

$mail->Host = "smtp.mailtrap.io";
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->Port = 25;
$mail->Username = "fe9884b4bcaf9c";
$mail->Password = " 9a7269bd98a964";


//include templates on every page
require_once 'includes/header.html';
require_once 'includes/navigation.html';


?>