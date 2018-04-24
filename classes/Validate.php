<?php

/*
Validate
- validates user inputted information for security purposes -
*/

class Validate{
    
    //validate string
    function validateString($str,$type){
        if(isset($str) && !empty($str)){ //make sure is not empty
            return $this->sanitise($str); //sanitise data
        }else{
            throw new Exception('Please input a valid ' .$type); //display error to user
        }
    }
    
    function validateEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if valid email address
            return $this->sanitise($email);
        }else{
            throw new Exception('Please enter a valid email address'); //display error to user
        }
    }
    
    function validateNumber($n, $type){
        if(is_numeric($n)){ //check number is numeric before returning
            return $n;
        }else{
            throw new Exception('Please enter a valid ' .$type); //display error to user
        }
    }
    
    //sanitise input data
    function sanitise($str){
        return htmlentities($str);
    }
}


?>