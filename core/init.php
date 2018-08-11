<?php

session_start(); //begin session


//auto load classes when instantiated
function class_loader($class){
    require_once '../classes/' .$class .'.php';
}

spl_autoload_register('class_loader');


//display errors
ini_set('display_errors', 1);


//load email settings
require('smtp.php');


//load database settings


//include templates on every page
include_once '../includes/header.html';
include_once '../includes/navigation.html';


?>