<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){ //if form submitted, or previously submitted
    

    try{ //validate form
        $validate = new Validate(); //create new obj
        
    
        //validate data and store in individual sessions
        $name = $validate->validateString($_POST['name'], 'name'); //validate name
        $_SESSION['name'] = $name;
        
        $email = $validate->validateEmail($_POST['email']); //validate email
        $_SESSION['email'] = $email;
        
        $tel = $validate->validateNumber($_POST['number'],'contact number'); //valiidate contact number
        $_SESSION['tel'] = $tel;
        
        $msg = $validate->validateString($_POST['msg'],'message'); //validate msg
        $_SESSION['msg'] = $msg;        
        
        
        

        //store modal outcome in session
        $_SESSION['modal'] = true;

        //send email
        $to = 'info@firstep.uk';
        $subject = 'Contact form submission';
        $body = '<p><b>' .$name .'</b><br /><i>'.$tel.'</i></p>';
        $body .= wordwrap($msg,70);
        $headers = "MIME-Version:1.0" ."\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <$email>" . "\r\n"; 

        mail($to, $subject, $body, $headers); //send email
        
    }catch(Exception $e){
        require_once 'includes/modal.html';    
    }
    
    
}else{ //if form has not yet been submitted, display form
    require_once 'includes/modal.html';
}


if(isset($_SESSION['modal'])){
    echo '<button id="modal-btn-sent" type="button" class="btn btn-lg">
            <i class="far fa-envelope"></i>
        </button>';
}

?>