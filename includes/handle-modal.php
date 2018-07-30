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
        
        $mail->setFrom($email);
        $mail->addAddress('info@firstep.uk');     // Add a recipient
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();   
        
        

        //send email from info@firstep.uk to inform user we have received their email
        $body = '<p>Thank you for your email. We will be in contact with you shortly to discuss your query.</p>
        <p>Kind Regards, <br />
        Ali Issaee <br />
        <br/>
        Owner</p>';

        $outgoing->addAddress($email);
        $outgoing->isHTML(true);
        $outgoing->Subject = "Quote";
        $outgoing->Body = $body;
        $outgoing->AltBody = strip_tags($body);
        
        $outgoing->send();

        
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