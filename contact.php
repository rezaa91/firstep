<!--contact-->

<?php

$css = "src/css/contact.css";
$js = 'src/js/contact.js';
$page_title = "contact us";

require_once 'core/init.php';



//handle form
if($_SERVER['REQUEST_METHOD'] == "POST"){

    try{ //validate form
        
        $validate = new Validate(); //create instance to validate form
        
        
        //validate data and store in individual sessions
        $name = $validate->validateString($_POST['name'],'name'); //store name if valid
        $_SESSION['name'] = $name;
        
        $email = $validate->validateEmail($_POST['email']); //store email if valid
        $_SESSION['email'] = $email;
        
        $tel = $validate->validateNumber($_POST['telephone'], 'contact number'); //store telephone if valid
        $_SESSION['tel'] = $tel;
        
        $msg = $validate->validateString($_POST['message'],'message'); //store msg from user
        $_SESSION['msg'] = $msg;
        
        
        
        
        
        if(!isset($_SESSION['modal'])){ //if form not previously submitted via modal, disable contact resubmissions by setting session value
            $_SESSION['modal'] = true;
        }
        
        //send email
        $to = 'info@firstep.uk';
        $subject = 'Contact form submission';
        $body = '<p><b>' .$name .'</b><br /><i>' .$tel.'</i></p>';
        $body .= wordwrap($msg, 70); 
        //$from = $email;
        $from = 'info@firstep.uk';

        
        
        
        
    }catch(Exception $e){ //display errors, if applicable
        $error_msg = $e->getMessage(); //store exceptions
    }

}

?>



<div id="wrapper">
   
    <!--header-->
    <div class="container-fluid" id="header">
        <div class="container" id="header-text">
            <h3 class="header-title">Get in touch today.</h3>
        </div>
    </div><!--end of header-->
    
    <!--contact form-->
    <div class="container" id="contact">
        <div class="row justify-content-between">
           <!--form-->
            <div class="col-md-6" id="form-details">
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label for="name">NAME:</label><br />
                        <input type="text" name="name" class="form-control" id="name" <?php if(isset($_SESSION['modal'])){echo 'disabled';} ?> value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>"/>
                        <span id="name_error" class="error"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">EMAIL:</label><br />
                        <input type="text" name="email" class="form-control" id="email" <?php if(isset($_SESSION['modal'])){echo 'disabled';} ?> value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>" />
                        <span id="email_error" class="error"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="">TELEPHONE:</label><br />
                        <input type="text" name="telephone" class="form-control" id="tel" <?php if(isset($_SESSION['modal'])){echo 'disabled';} ?> value="<?php if(isset($_SESSION['tel'])){echo $_SESSION['tel'];} ?>" />
                        <span id="tel_error" class="error"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">HOW CAN WE HELP?</label><br />
                        <textarea rows="5" name="message" class="form-control" id="msg" <?php if(isset($_SESSION['modal'])){echo 'disabled';} ?>><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];} ?></textarea>
                        <span id="msg_error" class="error"></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn" id="send-btn" <?php if(isset($_SESSION['modal'])){echo 'disabled';} ?> value="<?php if(isset($_SESSION['modal'])){echo "SENT";}else{echo "SEND";} ?>" />
                    </div>
                    
                    <div class="form-group">
                        <?php if(isset($_SESSION['modal'])){ echo '<span class="text-muted">Did you input incorrect details? <a href="mailto:info@firstep.uk">send us an email</a> to rectify this';} ?>
                    </div>
                </form><!--end of form-->
            </div><!--end of row-->
            
            
            <!--contact details-->
            <div class="col-md-4" id="contact-details">
                <address>
                    <div class="address-control">
                        <h5 class="address-header"><i class="far fa-clock"></i> Opening Times</h5>
                        <p class="address-body text-muted">Daily, 8am-8pm</p>
                    </div>
                    
                    <div class="address-control">
                        <h5 class="address-header"><i class="fas fa-at"></i> General Enquiries</h5>
                        <p class="address-body text-muted">info@firstep.uk</p>
                    </div>
                    
                    <div class="address-control">
                        <h5 class="address-header"><i class="fas fa-mobile-alt"></i> Tel</h5>
                        <p class="address-body text-muted">07873903800</p>
                    </div>
                    
                    <div class="address-control">
                        <h5 class="address-header"><i class="fas fa-map-marker"></i> Where Are We?</h5>
                        <p class="address-body text-muted">Kingswood,<br />Kingston Upon Hull,<br />HU7, <br />United Kingdom</p>
                    </div>
                </address>
            </div><!--end of contact details-->
        </div><!--end of row-->
    </div> 
       
</div>



<?php
include_once('includes/footer.html');
?>