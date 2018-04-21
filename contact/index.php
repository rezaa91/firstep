<!--contact-->

<?php
$css = "../src/css/contact.css";
$page_title = "contact us";
include_once('../includes/header.html');
include_once('../includes/navigation.html');
?>



<div id="wrapper">
   
    <!--modal-->
    <?php include_once('../includes/modal.html'); ?>
   
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
                        <input type="text" name="name" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                        <label for="email">EMAIL:</label><br />
                        <input type="text" name="email" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                        <label for="">TELEPHONE:</label><br />
                        <input type="text" name="telephone" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                        <label for="message">HOW CAN WE HELP?</label><br />
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn" id="send-btn" value="SEND" />
                    </div>
                </form><!--end of form-->
            </div><!--end of form-->
            
            
            <!--contact details-->
            <div class="col-md-4" id="contact-details">
                <address>
                    <div class="address-control">
                        <h4 class="address-header"><i class="far fa-clock"></i> Opening Times</h4>
                        <p class="lead address-body text-muted">Daily, 8am-1900</p>
                    </div>
                    
                    <div class="address-control">
                        <h4 class="address-header"><i class="fas fa-at"></i> General Enquiries</h4>
                        <p class="lead address-body text-muted">info@firstep.uk</p>
                    </div>
                    
                    <div class="address-control">
                        <h4 class="address-header"><i class="fas fa-mobile-alt"></i> Tel</h4>
                        <p class="lead address-body text-muted">07873903800</p>
                    </div>
                    
                    <div class="address-control">
                        <h4 class="address-header"><i class="fas fa-map-marker"></i> Where Are We?</h4>
                        <p class="lead address-body text-muted">Kingswood,<br />Kingston Upon Hull,<br />HU7, <br />United Kingdom</p>
                    </div>
                </address>
            </div><!--end of contact details-->
        </div><!--end of row-->
    </div> 
       
</div>



<?php
include_once('../includes/footer.html');
?>