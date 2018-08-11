<?php


/**
 * This script displays the database settings for local host and server
 */


 $_CONFIG = [
     'local' => [
         'username' => 'rezaa91',
         'password' => getenv(db_pass),
         'db_name' => 'firstep',
         'host_name' => 'localhost'
     ],

     'server' => [
         'username' => 'u89073236',
         'password' => '',
         'db_name' => '',
         'host_name' => 'home678859597.1and1-data.host'
     ]
];


try{

    $pdo = new PDO('mysql:host = ' . $_CONFIG['local']['host_name'] . ';dbname' = . $_CONFIG['local']['db_name'], $_CONFIG['local'['username'], $_CONFIG['local']['password'] );

}catch(PDOException $e){
    
    echo $e->getMessage();
    die();

}

?>