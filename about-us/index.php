<!--about us-->

<?php
$css = "../src/css/about-us.css";
$js = '../src/js/about-us.js';
$page_title = "about us";
include_once('../includes/header.html');
include_once('../includes/navigation.html');
?>



<div id="wrapper">
   
    <?php include_once('../includes/modal.html'); ?>
   
    <!--header-->
    <div class="container-fluid" id="header">
        <div class="container" id="header-text">
            <h3 class="header-title">"Our mission is to create wonderful websites,<br />structured towards your business."</h3>
        </div>
    </div><!--end of header-->
    
    
    
    <!--who are we-->
    <div class="container" id="who">
        
        <h4 class="text-muted">- WHO WE ARE -</h4>
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="who-title">
                    <h4>Our Passion</h4>
                </div>
                <div class="who-desc">
                    <p>To help you excel in business</p>
                </div>
            </div><!--end of col 1-->
            
            <div class="col-md-4">
                <div class="who-title">
                    <h4>Our Goals</h4>
                </div>
                <div class="who-desc">
                    <p>To provide you with a stunning website which will aim to improve your business</p>
                </div>
            </div><!--end of col 2-->
            
            <div class="col-md-4">
                <div class="who-title">
                    <h4>Our Results</h4>
                </div>
                <div class="who-desc">
                    <p>Stunning websites. Increased traffic. Increased sales.</p>
                </div>
            </div><!--end of col 3-->
            
        </div><!--end of row-->
        
    </div><!--end of who we are section-->
    
    
    
    
    <!--images-->
    <div class="container-fluid" id="image-banner">
        <div class="row">
            <div class="col-md-3 banner-img">
                <img class="img-fluid" src="../src/img/firstep-4.jpg" />
            </div><!--end of col 1-->
            <div class="col-md-3 banner-img">
                <img class="img-fluid" src="../src/img/firstep-3.jpg" />
            </div><!--end of col 2-->
            <div class="col-md-3 banner-img">
                <img class="img-fluid" src="../src/img/firstep-4.jpg" />
            </div><!--end of col 3-->
            <div class="col-md-3 banner-img">
                <img class="img-fluid" src="../src/img/firstep-3.jpg" />
            </div><!--end of col 4-->
        </div><!--end of row-->
    </div><!--end of image banner-->
    
    
    <!--desc-->
    <div class="container" id="about-desc">
        <div class="row" id="about-desc-banner">
            <div class="col-md-4 about-section">
                <img class="img-fluid" src="../src/img/firstep-2.jpg"/>
            </div><!--end of col 1-->
            <div class="col-md-8">
                <div class="about-desc-header about-section">
                    <h4 class="mission-title"><b>OUR MISSION</b></h4>
                </div>
                <div class="about-desc-body about-section">
                    <p class="lead text-muted">"Here at <span class="mission-title">FIRSTEP</span>, our mission is to create websites fit for purpose. We don't believe in a 'one size fits all' approach which is why we build all our websites from scratch. This means that we do not follow a template-styled theme like a lot of websites out there. Our templates are created with you in mind, this allows us freedom to create whatever you want. The options are limitless!"</p>
                    <p class="text-info"></p>
                </div>
                <div class="about-desc-footer about-section">
                    <blockquote class="text-right">- Ali Issaee, <small>Managing Director</small></blockquote>
                </div>
            </div><!--end of col 2-->
        </div><!--end of row-->
    </div><!--end of description-->
    
    
    <!--social media-->
    <div class="container" id="social-media">
        <hr />
        <h5 class="text-center social-title">FOLLOW OUR SOCIAL MEDIA ACCOUNTS</h5>
        <ul class="list-inline text-center">
            <li class="list-inline-item"><a href='#' class="social" target="_blank" title="facebook/firstep"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href='#' class="social" target="_blank" title="twitter/firstep"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href='#' class="social" target="_blank" title="instagram/firstep"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <hr />
    </div><!--end of social media-->
    
    
    
    
    <!--call to action-->
    <div class="container-fluid jumbotron" id="call-to-action">
        <div class="text-center">
            <h4 class="call-title">GET THE BALL ROLLING...</h4>
            <p class="lead text-muted">Simply fill in a short form and we will be in touch, it's as simple as that.</p>
            <button class="btn btn-lg" id="call-btn">Contact Us</button> 
        </div>
    </div><!--end of call to action-->
    
    
</div>





<?php
include_once('../includes/footer.html');
?>