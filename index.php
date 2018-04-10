<?php

$page_title = "FIRSTEP";
$js = "src/js/index.js";
$css = "src/css/index.css";

require_once('includes/header.html');

?>


<div id="wrapper">
    
    <!--header; to include - nav, page title with buttons to access important content-->
    <header id="header">
        
        <!--navigation bar-->
        <nav for="navigation" class="navbar navbar-expand-lg navbar-light fixed-top">
            <!--logo in top left corner-->
            <a href='#' class="navbar-brand">FIRSTEP</a>
            
            <!--icon which displays when collapsed to show menu items-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation_bar" aria-controls="navigation_bar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!--individual list items-->
            <div class="collapse navbar-collapse" id="navigation_bar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href='#'>HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='#'>ABOUT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='#'>SERVICES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='#'>TESTOMONIALS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='#'>CONTACT</a>
                    </li>
                </ul>
            </div><!--end of list items-->

        </nav><!--end of nav-->
        
        
        <div id="header-content" class="container text-center">
            <div id="header-text">
                <h1>FIRSTEP</h1>
                <h4>WE DESIGN. WE DEVELOP</h4>
            </div>
            <div id="header-buttons">
                <button class="btn btn-light">PROJECTS</button>
                <button class="btn btn-info">GET STARTED</button>
            </div>
        </div>
        
    </header><!--end of header-->
    
    
    <!--about section -->
    <div id="about" class="container">
        
        <h4 id="about-tag" class="text-center">- THE JOURNEY OF A THOUSAND MILES BEGINS WITH A SINGLE STEP -</h4>
        
        <!--begin row-->
        <div class="row">
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4>Website Design <i class="fas fa-pencil-alt"></i></h4>
                    </div>
                    <div class="about-desc">
                        <p>We design your website to meet your goals! Our aim is to make you happy, and we will not stop until you are 100% satisfied with the design.</p>
                    </div>
                </div>
            </div><!--end of column 1-->
            
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4>Website Development <i class="fas fa-desktop"></i></h4>
                    </div>
                    <div class="about-desc">
                        <p>Your website will be tailored to meet your exact requirements and commercial goals. It will be fully responsive so that is looks beautiful &amp; sleek on all devices.</p>
                    </div>
                </div>
            </div><!--end of column 2-->
            
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4>Maintenance <i class="fas fa-wrench"></i></h4>
                    </div>
                    <div class="about-desc">
                        <p>We understand that your website needs changing regularly to stay modern &amp; unique. That's why we include free updates to your website as part of your package.</p>
                    </div>
                </div>
            </div><!--end of column 3-->
        </div><!--end of row-->
        
    </div><!--end of about section-->
    
    
    <!--featured projects-->
    <div class="jumbotron container-fluid" id="featured_projects">
        <div id="projects-header">
            <h2>FEATURED PROJECTS</h2>
            <p class="lead">VIEW THE COLLECTION</p>
            <hr class="my-4"/>
        </div>
        <!--display examples below-->
        <div id="projects">
            <div id="project_examples">
                
                <!--show examples-->
                <div class="row">
                    <div class="col-md-6">
                        <a href='http://www.thehybridkid.uk' target="_blank" title="www.thehybridkid.uk">
                            <div class="panel">
                                <div class="panel-title text-center">
                                    <h6>THE HYBRID KID</h6>
                                </div>
                                <img src="src/img/hybrid.jpg" class="img-fluid"/>
                            </div>
                        </a>
                    </div><!--end of example 1-->
                    
                    <div class="col-md-6">
                        <a href='http://www.bensonsportsmassagetherapy.co.uk' target="_blank" title="www.bensonsportsmassagetherapy.co.uk">
                            <div class="panel">
                                <div class="panel-title text-center">
                                    <h6>CALLUM BENSON'S SPORTS MASSAGE THERAPY CLINIC</h6>
                                </div>
                                <img src="src/img/massage.jpg" class="img-fluid" />
                            </div>
                        </a>
                    </div><!--end of example 2-->
                </div><!--end of row-->
                
            </div><!--end of projects examples-->
        </div><!--end of projects-->
        
    </div><!--end of featured projects-->

</div><!--end of wrapper-->

<?php
require_once('includes/footer.html');
?>
