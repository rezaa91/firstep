<?php

session_start(); //begin session


//auto load classes when instantiated
function class_loader($class){
    require_once '../classes/' .$class .'.php';
}

spl_autoload_register('class_loader');


//display errors - turn off on live server
ini_set('display_errors', 0);


//load email settings
require('smtp.php');


//load database settings
/*
require 'db_connection.php';
*/


?>