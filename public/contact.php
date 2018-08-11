<?php

require_once '../core/init.php';

$page_title = "contact us";
include '../includes/header.inc.php';


//handle contact form
if($_SERVER['REQUEST_METHOD'] == "POST"){

    try{ //validate form
        
        $validateContactForm = new Validate(); //create instance to validate form
        
        
        //validate data and store in individual sessions
        $name = $validateContactForm->validateString($_POST['name'],'name'); //store name if valid
        $_SESSION['name'] = $name;
        
        $email = $validateContactForm->validateEmail($_POST['email']); //store email if valid
        $_SESSION['email'] = $email;
        
        $tel = $validateContactForm->validateNumber($_POST['telephone'], 'contact number'); //store telephone if valid
        $_SESSION['tel'] = $tel;
        
        $msg = $validateContactForm->validateString($_POST['message'],'message'); //store msg from user
        $_SESSION['msg'] = $msg;
        
        
        
        
        
        if(!isset($_SESSION['modal'])){ //if form not previously submitted via modal, disable contact resubmissions by setting session value
            $_SESSION['modal'] = true;
        }
        
        //content of email
        $subject = 'Contact form submission';
        $body = '<p><b>' .$name .'</b><br /><i>' .$tel.'</i></p>';
        $body .= wordwrap($msg, 70); 

        //email from
        $mail->setFrom($email);
        $mail->addAddress('info@firstep.uk');

        //Add content to instance
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        //send
        if( $mail->send() ){
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
        }else{
            throw new Expcetion('Sorry, the email was not sent. Please try again');
            exit();
        }  

    }catch(Exception $e){ //display errors, if applicable
        $error_msg = $e->getMessage();
    }

}


include '../views/contact.html';
include '../includes/footer.inc.php';
?>