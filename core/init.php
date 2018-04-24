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

//include templates on every page
require_once 'includes/header.html';
require_once 'includes/navigation.html';


?>