<!--about us-->

<?php
$css = "src/css/about-us.css";
$js = 'src/js/about-us.js';
$page_title = "about us";
$modal = true;

require_once 'core/init.php';
require_once 'includes/handle-modal.php';

?>



<div id="wrapper">
    <!--header-->
    <div class="container-fluid" id="header">
        <div class="container" id="header-text">
            <h3 class="header-title">"Our mission is to create wonderful websites,<br />tailored towards your business."</h3>
        </div>
    </div><!--end of header-->
    
    
    
    <!--who are we-->
    <div class="container-fluid" id="who">
        <div class="container">
            <h4 class="text-muted" id="who-header">WHO ARE WE?</h4>

            <div class="row">

                <div class="col-md-4 who-section">
                    <div class="who-title">
                        <h4>Our Passion <i class="far fa-smile"></i></h4>
                    </div>
                    <div class="who-desc">
                        <p class="text-muted">We love creating websites! There is something special about taking an idea, or a design, and programming that idea in to a fully functioning, beautiful website.</p>
                    </div>
                </div><!--end of col 1-->

                <div class="col-md-4 who-section">
                    <div class="who-title">
                        <h4>Our Goals <i class="fas fa-clipboard-list"></i></h4>
                    </div>
                    <div class="who-desc">
                        <p class="text-muted">We thrive for customer satisfaction, and that is our primary goal we set out to achieve. Until this goal is met, we will not stop working! We hope that if you are fully satisfied with the service you received, you are more likely to recommend more custom our way if the opportunity presents itself.</p>
                    </div>
                </div><!--end of col 2-->

                <div class="col-md-4 who-section">
                    <div class="who-title">
                        <h4>Our Results <i class="fas fa-vials"></i></h4>
                    </div>
                    <div class="who-desc">
                        <p class="text-muted">Our current clients have reported an increase in traffic &amp; sales, which have aided to their financial goals. So far we have achieved a 100% satisfaction score from our clients which we hope will continue as we move forward.</p>
                    </div>
                </div><!--end of col 3-->

            </div><!--end of row-->
        </div>
    </div><!--end of who we are section-->
    
    
    
    <!--desc-->
    <div class="container" id="about-desc">
        <div class="row" id="about-desc-banner">
            <div class="col-md-4 about-section">
                <img class="img-fluid" src="src/img/firstep-2.jpg"/>
            </div><!--end of col 1-->
            <div class="col-md-8">
                <div class="about-desc-header about-section">
                    <h4 class="mission-title"><b>OUR MISSION</b></h4>
                </div>
                <div class="about-desc-body about-section">
                    <p class="lead text-muted">"Here at <span class="mission-title">FIRSTEP</span>, our mission is to create websites fit for purpose. We don't believe in a 'one size fits all' approach, which is why we build all our websites with you in mind. We like to understand your business and what you do before we even begin discussing websites. This allows your website to match your needs as a business."</p>
                    <p class="text-info"></p>
                </div>
                <div class="about-desc-footer about-section">
                    <blockquote class="text-right">- Ali Issaee, <small>Owner</small></blockquote>
                </div>
            </div><!--end of col 2-->
        </div><!--end of row-->
    </div><!--end of description-->
    
    
    <!--social media-->
    <div class="container" id="social-media">
        <hr />
        <h5 class="text-center social-title">FOLLOW OUR SOCIAL MEDIA ACCOUNTS</h5>
        <ul class="list-inline text-center">
            <li class="list-inline-item"><a href='https://facebook.com/firstepweb' class="social" target="_blank" title="facebook/firstep"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href='https://twitter.com/firstep_web' class="social" target="_blank" title="twitter/firstep"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href='https://instagram.com/firstep_web' class="social" target="_blank" title="instagram/firstep"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <hr />
    </div><!--end of social media-->
    
    
    
    
    <!--call to action-->
    <div class="container-fluid jumbotron" id="call-to-action">
        <div class="text-center">
            <h4 class="call-title">GET THE BALL ROLLING...</h4>
            <p class="lead text-muted contact-desc">Simply fill in a short form and we will be in touch, it's as simple as that.</p>
            <a href='contact.php' class="btn btn-lg" id="call-btn">Contact Us</a> 
        </div>
    </div><!--end of call to action-->
    
    
</div>





<?php
include_once('includes/footer.html');
?>