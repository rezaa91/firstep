<!DOCTYPE html>


<html lang="en">

    <head>
        <!--meta tags-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="A website development company which produce great websites and web applications for small to medium enterprises and sole traders" />
        <meta name="keywords" content="Website, design, development, hosting, digital, marketting" />
        <meta name="author" content="Ali Issaee"/>
        

        <!--page title-->
        <title><?php if(isset($page_title)){echo $page_title;} ?></title>
        <link rel="shortcut icon" href="src/img/logo-title.png" />
        

        <!--links to bootstrap and jquery-->
        <link rel="stylesheet" href="src/lib/bootstrap.min.css"/>
        <script type="text/javascript" src="src/lib/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="src/lib/bootstrap.bundle.min.js"></script>
    

        <!--personal scripts and stylesheets-->
        <link rel='stylesheet' href='src/css/app.css'/>
        <script type="text/javascript" src='src/js/app.js' ></script>
        
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
        <!--font-awesome-->
        <script src="src/lib/fontawesome-all.min.js"></script>
        
        <!--cookie consent-->
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />

        <!--cookie message-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#000"
            },
            "button": {
              "background": "#f1d600"
            }
          },
          "theme": "classic"
        })});
        </script><!--end of cookie consent-->
        
    </head><!--end of head-->
    

    
    <!--body begin-->
    <body>
      <?php include 'navigation.html'; ?>
      <script>header();</script>