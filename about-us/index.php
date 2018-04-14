<!--about us-->

<?php
$css = "../src/css/about-us.css";
$page_title = "about us";
include_once('../includes/header.html');
include_once('../includes/navigation.html');
?>



<div id="wrapper">
   
    <?php include_once('../includes/modal.html'); ?>
   
    <!--header-->
    <div class="container-fluid bg-info" id="header">
        <div class="container" id="header-text">
            <h3 class="text-white">"Our mission is to create wonderful websites,<br />structured towards your business."</h3>
        </div>
    </div><!--end of header-->
    
    
    <!--images-->
    <div class="container-fluid" id="image-banner">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="../src/img/firstep-4.jpg" />
            </div><!--end of col 1-->
            <div class="col-md-3">
                <img class="img-fluid" src="../src/img/firstep-3.jpg" />
            </div><!--end of col 2-->
            <div class="col-md-3">
                <img class="img-fluid" src="../src/img/firstep-4.jpg" />
            </div><!--end of col 3-->
            <div class="col-md-3">
                <img class="img-fluid" src="../src/img/firstep-3.jpg" />
            </div><!--end of col 4-->
        </div><!--end of row-->
    </div><!--end of image banner-->
    
    
    <!--desc-->
    <div class="container" id="about-desc">
        <div class="row" id="about-desc-banner">
            <div class="col-md-4">
                <img class="img-fluid" src="../src/img/firstep-2.jpg"/>
            </div><!--end of col 1-->
            <div class="col-md-8">
                <div class="about-desc-header">
                    <h4 class="text-info">OUR MISSION</h4>
                </div>
                <div class="about-desc-body">
                    <p class="lead">"Here at <span class="text-info">FIRSTEP</span>, our mission is to create websites fit for purpose. We don't believe in a 'one size fits all' approach which is why we build all our websites from scratch. This means that we do not follow a template-styled theme like a lot of websites out there. Our templates are created with you in mind, this allows us freedom to create whatever you want. The options are limitless!"</p>
                    <p class="text-info"></p>
                </div>
                <div class="about-desc-footer">
                    <blockquote class="text-muted text-right">- Ali Issaee, <small>Managing Director</small></blockquote>
                </div>
            </div><!--end of col 2-->
        </div><!--end of row-->
    </div><!--end of description-->
    
    
    <!--social media-->
    <div class="container" id="social-media">
        <hr />
        <h5 class="text-muted text-center">FOLLOW OUR SOCIAL MEDIA ACCOUNTS</h5>
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
            <h4 class="text-info">GET THE BALL ROLLING...</h4>
            <p class="lead text-muted">Simply fill in a short form and we will be in touch, it's as simple as that.</p>
            <button class="btn btn-lg btn-info">Contact Us</button> 
        </div>
    </div><!--end of call to action-->
    
    
</div>





<?php
include_once('../includes/footer.html');
?>