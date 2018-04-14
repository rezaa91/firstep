<?php

$page_title = "FIRSTEP";
$js = "../src/js/index.js";
$css = "../src/css/index.css";

require_once('../includes/header.html');

?>


<div id="wrapper">
        
    
    <!--header; to include - nav, page title with buttons to access important content-->
    <header id="header">
        
        <!--include nav bar-->
        <?php include_once('../includes/navigation.html') ?>
        
        
        <div id="header-content" class="container text-center">
            <div id="header-text">
                <h1 id="main_header">FIRSTEP</h1>
                <h4><span class="slogan">WE DESIGN.</span> <span class="slogan text-warning">WE DEVELOP.</span></h4>
            </div>
            <div id="header-buttons">
                <button class="btn btn-light">PROJECTS</button>
                <button class="btn btn-info" id="main_btn">GET STARTED</button>
            </div>
        </div>
        
        <!--include modal-->
        <?php include_once('../includes/modal.html') ?>
             
    </header><!--end of header-->
    
    
    
    <!--about section -->
    <div id="about" class="container">
        
        <h4 id="about-tag" class="text-center text-info">- THE JOURNEY OF A THOUSAND MILES BEGINS WITH A SINGLE STEP -</h4>
        
        <!--begin row-->
        <div class="row">
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4 class="text-muted">Website Design <i class="fas fa-pencil-alt"></i></h4>
                    </div>
                    <div class="about-desc">
                        <p>We design your website to meet your commercial goals! Our aim is to make you happy, and we will not stop until you are 100% satisfied with the design.</p>
                    </div>
                </div>
            </div><!--end of column 1-->
            
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4 class="text-muted">Website Development <i class="fas fa-desktop"></i></h4>
                    </div>
                    <div class="about-desc">
                        <p>Your website will be tailored to meet your exact requirements and commercial goals. It will be fully responsive so that is looks beautiful &amp; sleek on all devices.</p>
                    </div>
                </div>
            </div><!--end of column 2-->
            
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4 class="text-muted">Maintenance <i class="fas fa-wrench"></i></h4>
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
            <h2 class="text-info">FEATURED PROJECTS</h2>
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
                            <div class="panel text-center">
                                <div class="panel-title">
                                    <h6 class="text-muted">THE HYBRID KID</h6>
                                </div>
                                <img src="../src/img/hybrid.jpg" class="img-fluid"/>
                            </div>
                        </a>
                    </div><!--end of example 1-->
                    
                    <div class="col-md-6">
                        <a href='http://www.bensonsportsmassagetherapy.co.uk' target="_blank" title="www.bensonsportsmassagetherapy.co.uk">
                            <div class="panel text-center">
                                <div class="panel-title">
                                    <h6 class="text-muted">CALLUM BENSON'S SPORTS MASSAGE THERAPY CLINIC</h6>
                                </div>
                                <img src="../src/img/massage.jpg" class="img-fluid" />
                            </div>
                        </a>
                    </div><!--end of example 2-->
                </div><!--end of row-->
                
            </div><!--end of projects examples-->
        </div><!--end of projects-->
        
    </div><!--end of featured projects-->
    
    
    
    
    
    <!--services-->
    <div class="container-fluid" id="services">
        
        <div id="service-header">
            <h2 class="text-info">SERVICES</h2>
            <p class="lead">WHAT DO WE OFFER?</p>
            <hr class="my-4" />
        </div>
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="text-warning">Responsive</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="text-white">All our websites are responsive, meaning they look great on all devices, including desktops, laptops, tablets and mobile.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="text-warning">Search Engine Optimisation</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="text-white">No matter how good your website is, if it is poorly ranked on Google, no one will ever see it. Search Engine Optimisation increases the chances of your website ranking high on search engines so you can be easily found by your customers.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="text-warning">Website Design</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="text-white">We design your website with your business and potential customers in mind. Beautiful, simple &amp; intuitive designs means your customers are more likely to stay, and can easily find what they're looking for.</p>
                    </div>
                </div>
            </div><!--end of col-->
            
        </div><!--end of row 1-->
        
        
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="text-warning">Hosting</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="text-light">Hosting comes as part of the all-inclusive package. Hosting allows your website to be on the World Wide Web and to be easily accessible by anywhere in the world.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="text-warning">Website Development</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="text-light">After designing your website, it is time to get to the nitty gritty and begin programming your website. We follow the design closely and we promise you will not be disappointed with the end product.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="text-warning">Support</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="text-light">We understand that there are times you need to update your website. Perhaps you have changed address, or you want to write a blog. Luckily for you, we do this all for you. Just simply send us the changes or additions you want and we will complete this for you.</p>
                    </div>
                </div>
            </div><!--end of col-->
            
        </div><!--end of row 2-->
    
    </div><!--end of services-->
    
    
    
    
    <!--testomonials-->
    <div class="container-fluid" id="testomonials">
        
        <div id="test-header">
            <h2 class="text-info">TESTOMONIALS</h2>
            <p class="lead">WHAT DO OUR CUSTOMERS SAY?</p>
            <hr class="my-4"/>
        </div>
        
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top card-img" src="../src/img/callum.jpg" />
                <div class="card-body">
                    <p class="card-text">"After a short explanation of what I was after, Firstep was able to use their creative skills to design and produce an easy to use website for my customers. The website is very professional and the attention to detail is fantastic.</p>
                    <p class="card-text">Firstep's ability to produce a high standard website in a short time frame is commendable. Overall I would highly recommend."</p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted text-center">- CALLUM BENSON -</small>
                </div>
            </div><!--end of card 1-->
            
            <div class="card">
                <img class="card-img-top card-img" src="../src/img/afi.jpg" />
                <div class="card-body">
                    <p class="card-text">"After showing the team at Firstep my music, and explaining my vision, Firstep was able to captivate and manifest the end product I needed to communicate with my fans.</p>
                    <p class="card-text">The quality of the website was beyond my expectations and I would highly recommend to anyone looking for a creative, and interactive website."</p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">- THE HYBRID KID -</small>
                </div>
            </div><!--end of card 2-->
            
            <div class="card">
                <img class="card-img-top card-img" src="../src/img/placeholder.png" />
                <div class="card-body">
                    <p class="card-text"><!--enter text here--></p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">- YOU -</small>
                </div>
            </div><!--end of card 3-->
            
            <div class="card">
                <img class="card-img-top card-img" src="../src/img/placeholder.png" />
                <div class="card-body">
                    <p class="card-text"><!--enter text here--></p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">- YOUR COMPETITOR -</small>
                </div>
            </div><!--end of card 4-->
        </div><!--end of deck-->
        
    </div><!--end of testomonials-->
    
    
    
    <!--banner section-->
    <div id="banner" class="container">
        
        <div class="row">        
            <div class="col-md-4">
                <h4 class="text-muted">SEEN ENOUGH?</h4>
                <button class="btn btn-lg btn-info">GET YOUR WEBSITE</button>
            </div>
            
        </div><!--end of row-->
        
    </div><!--end of banner-->
    
    

</div><!--end of wrapper-->

<?php
require_once('../includes/footer.html');
?>
