<?php

session_start(); //begin session

//configuration array
$GLOBALS['config'] = array(
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


//load email settings
require('core/config.php');


//include templates on every page
include_once 'includes/header.html';
include_once 'includes/navigation.html';


?>