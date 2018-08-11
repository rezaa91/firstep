<?php

$page_title = "FIRSTEP";
$js = "src/js/index.js";
$css = "src/css/index.css";
$modal = true;

require_once '../core/init.php';
require_once '../includes/handle-modal.php';




?>


<div id="wrapper">
        
    
    <!--header; to include - nav, page title with buttons to access important content-->
    <header id="header">
        <div id="header-content" class="container text-center">
            <div id="header-text">
                <h1 id="main_header">FIRSTEP</h1>
                <h4><span class="slogan">WE DESIGN.</span> <span class="slogan">WE DEVELOP.</span></h4>
            </div>
            <div id="header-buttons">
                <a href='#featured_projects' class="btn" id="projects_btn">PROJECTS</a>
                <a class="btn" id="main_btn" href='#get-started'>GET STARTED</a>
            </div>
        </div>             
    </header><!--end of header-->
    
    
    
    <!--about section -->
    <div id="about" class="container">
        
        <h4 id="about-tag" class="text-center text-muted">- THE JOURNEY OF A THOUSAND MILES BEGINS WITH A SINGLE STEP -</h4>
        
        <!--begin row-->
        <div class="row">
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4 class="about-heading">Website Design <i class="fas fa-pencil-alt"></i></h4>
                    </div>
                    <div class="text-muted">
                        <p>We design your website to meet your commercial goals! Our aim is to make you happy, and we will not stop until you are 100% satisfied with the design.</p>
                    </div>
                </div>
            </div><!--end of column 1-->
            
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4 class="about-heading">Website Development <i class="fas fa-desktop"></i></h4>
                    </div>
                    <div class="text-muted">
                        <p>Your website will be tailored to meet your exact requirements. It will be fully responsive so that is looks beautiful &amp; sleek on all devices.</p>
                    </div>
                </div>
            </div><!--end of column 2-->
            
            <div class="col-md-4">
                <div class="about-column">
                    <div class="about-title">
                        <h4 class="about-heading">Maintenance <i class="fas fa-wrench"></i></h4>
                    </div>
                    <div class="text-muted">
                        <p>We understand that your website needs changing regularly to stay modern &amp; unique. That's why we promote monthly packages which include free updates to your website.</p>
                    </div>
                </div>
            </div><!--end of column 3-->
        </div><!--end of row-->
        
    </div><!--end of about section-->
    
    
    <!--featured projects-->
    <div class="jumbotron container-fluid" id="featured_projects">
        <div id="projects-header">
            <h2 class="featured-header">FEATURED PROJECTS</h2>
            <p class="lead text-muted">VIEW THE COLLECTION</p>
            <hr class="my-4"/>
        </div>
        <!--display examples below-->
        <div id="projects">
            <div id="project_examples">
                
                <!--show examples-->
                <div class="row">
                    <div class="col-md-6 featured_projects">
                        <a href='http://www.thehybridkid.uk' target="_blank" title="www.thehybridkid.uk">
                            <div class="panel text-center">
                                <div class="featured-project-title">
                                    <h6 class="text-muted">THE HYBRID KID</h6>
                                </div>
                                <img src="src/img/hybrid.jpg" class="img-fluid"/>
                            </div>
                        </a>
                    </div><!--end of example 1-->
                    
                    <div class="col-md-6 featured_projects">
                        <a href='https://www.axphotography.co.uk' target="_blank" title="www.axphotography.co.uk">
                            <div class="panel text-center">
                                <div class="featured-project-title">
                                    <h6 class="text-muted">AX PHOTOGRAPHY</h6>
                                </div>
                                <img src="src/img/ax_desktop.png" class="img-fluid" />
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
            <h2>SERVICES</h2>
            <p class="lead">WHAT DO WE OFFER?</p>
            <hr class="my-4" />
        </div>
        
        <div class="row">
            
            <div class="col-md-4 service">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="panel-title">Responsive</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="panel-text">All our websites are responsive, meaning they look great on all devices, including desktops, laptops, tablets and mobile.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4 service">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="panel-title">Search Engine Optimisation</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="panel-text">No matter how good your website is, if it is poorly ranked on Google, no one will ever see it. Search Engine Optimisation increases the chances of your website ranking high on search engines so you can be easily found by your customers.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4 service">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="panel-title">Website Design</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="panel-text">We design your website with your business and customers in mind. Beautiful, simple &amp; intuitive designs means your customers are more likely to stay, and can easily find what they're looking for.</p>
                    </div>
                </div>
            </div><!--end of col-->
            
        </div><!--end of row 1-->
        
        
        
        <div class="row">
            
            <div class="col-md-4 service">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="panel-title">Hosting</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="panel-text">Hosting allows your website to be on the World Wide Web and to be easily accessible anywhere in the world. We are able to assist you on hosting solutions should you require our assistance.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4 service">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="panel-title">Website Development</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="panel-text">After designing your website, it is time to get to the nitty gritty and begin programming your website. During this phase, you can sit back, relax and await your spanking new website.</p>
                    </div>
                </div>
            </div><!--end of col-->
                
            <div class="col-md-4 service">
                <div class="service-panel">
                    <div class="service-panel-img">
                        <img />
                    </div>
                    <div class="service-panel-header">
                        <h5 class="panel-title">Support</h5>
                    </div>
                    <div class="service-panel-body">
                        <p class="panel-text">We understand that there are times you need to update your website. Perhaps you have changed address, or you want to write/update a blog. Lucky for you, we provide 2 solutions. We can either train you how to input content at no extra cost, or, you can sign up to a monthly maintenance package and we will update your content for you.</p>
                    </div>
                </div>
            </div><!--end of col-->
            
        </div><!--end of row 2-->
    
    </div><!--end of services-->
    
    
    
    
    <!--testomonials-->
    <div class="container-fluid" id="testomonials">
        
        <div id="test-header">
            <h2>TESTOMONIALS</h2>
            <p class="lead text-muted">WHAT DO OUR CUSTOMERS SAY?</p>
            <hr class="my-4"/>
        </div>
        
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top card-img" src="src/img/callum.jpg" />
                <div class="card-body">
                    <p class="card-text">"After a short explanation of what I was after, Firstep was able to use their creative skills to design and produce an easy to use website for my customers. The website is very professional and the attention to detail is fantastic.</p>
                    <p class="card-text">Firstep's ability to produce a high standard website in a short time frame is commendable. Overall I would highly recommend."</p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted text-center">- CALLUM BENSON -</small>
                </div>
            </div><!--end of card 1-->
            
            <div class="card">
                <img class="card-img-top card-img" src="src/img/afi.jpg" />
                <div class="card-body">
                    <p class="card-text">"After showing Firstep my music, and explaining my vision, Firstep was able to captivate and manifest the end product I needed to communicate with my fans.</p>
                    <p class="card-text">The quality of the website was beyond my expectations and I would highly recommend to anyone looking for a creative, and interactive website."</p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">- THE HYBRID KID -</small>
                </div>
            </div><!--end of card 2-->
            
            <div class="card hide-card">
                <img class="card-img-top card-img" src="src/img/ax_profile.png" />
                <div class="card-body">
                    <p class="card-text">"I needed a web application where I could store my personal and professional photographs. This is exactly what I got and I am very happy with the end product. The whole process was a lot easier than I anticipated."</p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">- AX PHOTOGRAPHY -</small>
                </div>
            </div><!--end of card 3-->
            
            <div class="card hide-card">
                <img class="card-img-top card-img" src="src/img/placeholder.png" />
                <div class="card-body">
                    <p class="card-text"><!--enter text here--></p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">- YOU -</small>
                </div>
            </div><!--end of card 4-->
        </div><!--end of deck-->
        
    </div><!--end of testomonials-->
    
    
    
    <!--GET STARTED-->
    <div class="container-fluid" id="get-started">
       
       <div id="get-started-header">
           <h1>GET STARTED</h1>
           <hr class="my-4"/>
       </div>
       
       <div id="get-started-body">
           <h3>What do I need to do?</h3>
           <p class="lead">Simply go to our contact page and fill out a short form. We will then contact you to discuss the finer details. It's as simple as that.</p>
           <p>What are you waiting for? Click below...</p>
           <a class="btn btn-lg btn-info" href='contact.php'>GET YOUR WEBSITE</a>
       </div>
        
    </div>
    
    
    
    

</div><!--end of wrapper-->

<?php
require_once('../includes/footer.html');
?>
