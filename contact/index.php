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
   
    <!--banner-->
    <div id="header" class="container-fluid"></div><!--end of banner-->
    
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
                        <input type="submit" name="submit" class="form-control btn btn-info" value="SEND" />
                    </div>
                </form><!--end of form-->
            </div><!--end of form-->
            
            
            <!--contact details-->
            <div class="col-md-4 bg-primary" id="contact-details">
                <address>
                    <div class="address-control">
                        <h4 class="address-header"><i class="far fa-clock text-warning"></i> Opening Times</h4>
                        <p class="lead text-white address-body">Daily, 8am-1900</p>
                    </div>
                    
                    <div class="address-control">
                        <h4 class="address-header"><i class="fas fa-at text-warning"></i> General Enquiries</h4>
                        <p class="lead text-white address-body">info@firstep.uk</p>
                    </div>
                    
                    <div class="address-control">
                        <h4 class="address-header"><i class="fas fa-mobile-alt text-warning"></i> Tel</h4>
                        <p class="lead text-white address-body">07873903800</p>
                    </div>
                    
                    <div class="address-control">
                        <h4 class="address-header"><i class="fas fa-map-marker text-warning"></i> Where Are We?</h4>
                        <p class="lead text-white address-body">Kingswood,<br />Kingston Upon Hull,<br />HU7, <br />United Kingdom</p>
                    </div>
                </address>
            </div><!--end of contact details-->
        </div><!--end of row-->
    </div> 
       
</div>



<?php
include_once('../includes/footer.html');
?>