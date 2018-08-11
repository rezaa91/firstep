//header and footer settings
function header(){
    $(function(){
        //apply background color to navbar when user begins to scroll
        $(window).scroll(function(){
            let scroll = $(window).scrollTop(); //find no. of pixels from top of screen
            if(scroll>0){ //when number of pixels from top exceeds 0 apply change
                $('nav').addClass('white');
                $('.navbar-brand').addClass('brand');
            }else{ //if user returns to top of page - remove classes which applied change
                $('nav').removeClass('white');
                $('.navbar-brand').removeClass('brand');
            }
        })
        
        //add mouse over effects to nav bar when at top of the page
        $('nav').on('mouseover', function(){
            if($(window).scrollTop() <= 0){ //if window is at top of page - i.e. navbar hasnt already got navbar effect on
                $('nav').addClass('white');
                $('.navbar-brand').addClass('brand');
            }
        })
        //same as above but in reverse
        $('nav').on('mouseout', function(){
            if($(window).scrollTop() <= 0){
                $('nav').removeClass('white');
                $('.navbar-brand').removeClass('brand');
            }
        })
    })
}




//modal settings
function modal(){
    //if modal form has been sent - do not allow any more form resubmissions, by blocking form opening up in the first place
    $(function(){
        
        $('body').on('mouseover',function(e){
            let target = e.target;
            if(target.id === 'modal-btn-sent'){
                target.innerHTML = "<span class='sent'><b>sent</b></span>";
            }
        })
        $('body').on('mouseout',function(e) {
            let target = e.target;
            if(target.id === 'modal-btn-sent'){
                target.innerHTML = '<i class="far fa-envelope"></i>';
            }
        })
        
        
        
        //client side validation
        //client side form validation class
        class Validation{
            
            validateStr(str){
                if(str.value === ""){//if empty string
                    return false;
                }else{
                    return true;
                }
            }
            
            validateEmail(email){
                let email_pattern = /^[a-zA-Z0-9._-]+@+[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if(email_pattern.test(email.value)){
                    return true;
                }else{
                    return false;
                }
            }
            
            validateTel(num){
                let tel_pattern = /^\d+$/;
                if(tel_pattern.test(num.value)){
                    return true;
                }else{
                    return false;
                }
            }
            
        }//end of validation class
        
        
        
        
        if(document.getElementById('name')){ //if form not previously submitted / otherwise DOM el wouldnt exist and would generate JS error
            //instantiate new Validation class
            let validate = new Validation;


            //initiate variable
            let name, email, tel, msg, btn,
                name_outcome, email_outcome, tel_outcome, msg_outcome;


            name = document.getElementById('name');
            email = document.getElementById('email');
            tel = document.getElementById('number');
            msg = document.getElementById('msg');
            btn = document.getElementById('quote-btn');


            //disable btn
            btn.disabled = true;

            //set outcomes to false
            name_outcome = false;
            email_outcome = false;
            tel_outcome = false;
            msg_outcome = false;


            //check if all inputs have correct data
            function checkForm(){
                if(name_outcome && email_outcome && tel_outcome && msg_outcome){
                    btn.disabled = false; //enable submit btn if form filled correctly
                }else{
                    btn.disabled = true;
                }
            }


            //functions below are to be used in event listeners
            function validate_name(){
                name_outcome = validate.validateStr(name); //bool
                checkForm();
            }

            function validate_email(){
                email_outcome = validate.validateEmail(email); //bool
                checkForm();
            }

            function validate_tel(){
                tel_outcome = validate.validateTel(tel); //bool
                checkForm();
            }

            function validate_msg(){
                msg_outcome = validate.validateStr(msg); //bool
                checkForm();
            }

            //EVENT LISTENERS
            name.addEventListener('keyup', validate_name);
            name.addEventListener('focus', validate_name);  
            name.addEventListener('blur', validate_name);


            email.addEventListener('keyup', validate_email);
            email.addEventListener('focus', validate_email);
            email.addEventListener('blur', validate_email);


            tel.addEventListener('keyup', validate_tel);
            tel.addEventListener('focus', validate_tel);
            tel.addEventListener('blur', validate_tel);


            msg.addEventListener('keyup', validate_msg);
            msg.addEventListener('focus', validate_msg);
            msg.addEventListener('blur', validate_msg);
        }
    })
}




//index page settings
function index(){
    /*
    Animate
    a class which creates UI animation effects
    */

    class Animate{

        //hide elements
        hide(el) {
            $(el).css('opacity','0');
        }
        
        //fade in elements
        fadeIn(el, ms, ms2){
            $(el).hide().delay(ms).fadeIn(ms2);
        }
        
        //fade in when in view
        scroll(el){
            let screen_height = $(window).height(); //height of screen
            let activation_offset = 0.7;
            let pos = $(el).offset().top;
            let activation_point = pos - (screen_height*activation_offset);
            $(window).scroll(function() {
                let y_scroll_pos = window.pageYOffset;
                let el_in_view = y_scroll_pos > activation_point;
                if(el_in_view) {
                    $(el).each(function(i) {
                        $(this).delay(i*400).animate({
                            opacity:1
                        },500)
                    })
                }
            })
        }
        
    }//end of class


    //on load
    $(function(){
        
        //create instance of Animate class to represent DOM
        let dom = new Animate();
        
        //hide elements on startup
        dom.hide('.about-column'); //hide about columns
        dom.hide('.slogan'); //hide slogan
        dom.hide('.card'); //hide testomonials
        dom.hide('.featured_projects'); //hide featured projecets
        dom.hide('.service'); //hide services
        
        
        //animations////////////////////////////
        
        //slogan animation on startup
        $('.slogan').each(function(i){
            $(this).delay(1600).delay(i*1000).animate({
                opacity:1
            },500);
        })
        
        //'get started' animation on startup
        $('#main_btn').animate({
            padding:50
        },1000,function(){
            $(this).animate({
                padding: 6.5
            },500)
        })
        
        
        dom.fadeIn('#header-content',600,1000) //fade header in on startup
        dom.scroll('.about-column'); //show about columns when in view
        dom.scroll('.card'); //show testomonials when in view
        dom.scroll('.featured_projects'); //show featured projects when in view
        dom.scroll('.service'); //show services when in view
        
        
        //scroll page to projects when 'projects' btn pressed
        $('#projects_btn').on('click', function(e) {
            e.preventDefault(); //prevent btn firing as set to snap to top of div in case client has JS disabled
            
            let pos = $('#featured_projects').offset().top; //find top of div position
            let heightOfNav = document.getElementsByTagName('nav')[0].offsetHeight; //height of navbar
            let scrollHeight = pos - heightOfNav; //scroll - the top of div position - height of nav to ensure full div in clients view
            
            //scroll page to top of div
            $('body,html').animate({
                scrollTop: scrollHeight
            }, 1000);
            
        })
        
        
        //scroll page to 'get started' when btn pressed
        $('#main_btn').on('click', function(e){
            e.preventDefault(); //prevent btn firing
            
            let pos = $('#get-started').offset().top; //find top of div position
            let heightOfNav = document.getElementsByTagName('nav')[0].offsetHeight; //height of navbar
            let scrollHeight = pos - heightOfNav; //find the top of div position minus the nav bar to avoid nav blocking some content
            
            //scrol page in to view
            $('body,html').animate({
                scrollTop:scrollHeight
            },1000);
        })
    })
}




//about page settings

function about(){
    /*
    Animate
    a class which creates UI animation effects
    */

    class Animate{

        //hide elements
        hide(el) {
            $(el).css('opacity','0');
        }
        
        //fade in elements
        fadeIn(el, ms, ms2){
            $(el).hide().delay(ms).fadeIn(ms2);
        }
        
        //fade in when in view
        scroll(el){
            let screen_height = $(window).height(); //height of screen
            let activation_offset = 0.9;
            let pos = $(el).offset().top;
            let activation_point = pos - (screen_height*activation_offset);
            $(window).scroll(function() {
                let y_scroll_pos = window.pageYOffset;
                let el_in_view = y_scroll_pos > activation_point;
                if(el_in_view) {
                    $(el).each(function(i) {
                        $(this).delay(i*400).animate({
                            opacity:1
                        },500)
                    })
                }
            })
        }  
    }//end of class


    $(function() {
        
        let dom = new Animate();
        
        //hide elements
        dom.hide('.who-section'); //hide who we are sections
        dom.hide('.about-section'); //hide 'our mission' section
        
        //animate elements
        dom.fadeIn('.header-title',400,800); //fade main title on startup
        dom.scroll('.about-section'); //fade about section in on scroll
        
        //fade who we are sections in on startup
        $('.who-section').each(function(i) {
            $(this).delay(i*400).animate({
                opacity:1
            },600)
        })
        
    })
}





//contact page settings
function contact(){
    $(function(){

        //fade title in on load
        $('.header-title').hide().delay(500).fadeIn(600);
        
        
        /*FOMR VALIDATION*/
        
        //client side form validation class
        class Validation{
            
            validateStr(str){
                if(str.value === ""){//if empty string
                    return false;
                }else{
                    return true;
                }
            }
            
            validateEmail(email){
                let email_pattern = /^[a-zA-Z0-9._-]+@+[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if(email_pattern.test(email.value)){
                    return true;
                }else{
                    return false;
                }
            }
            
            validateTel(num){
                let tel_pattern = /^\d+$/;
                if(tel_pattern.test(num.value)){
                    return true;
                }else{
                    return false;
                }
            }
            
        }//end of validation class
    
        
        //initiate var
        let btn, name, email, tel, msg, 
            name_outcome, email_outcome, tel_outcome, msg_outcome;
        
        //set var to appropriate DOM locations
        btn = document.getElementById('send-btn');
        name = document.getElementById('name');
        email = document.getElementById('email');
        tel = document.getElementById('tel');
        msg = document.getElementById('msg');
        
        //disabled submit btn on load
        btn.disabled = true;
        
        //set all outcomes to false on load
        name_outcome = false;
        email_outcome = false;
        tel_outcome = false;
        msg_outcome = false;
        
        
        //check if form completed
        function checkForm(){
            //if all outcomes are true, this means all inputs have correct data
            if(name_outcome && email_outcome && tel_outcome && msg_outcome){ //if all inputs filled correctly, allow user to send form
                btn.disabled = false; //enable submit btn
            }else{
                btn.disabled = true;
            }
        }
        
        
        //instantiate new Validation obj
        let validate = new Validation();
        
        //add event listeners on key up to input forms - set outcomes to the result of validation
        //inform user if mistake made
        
        //FUNCTIONS TO USE WITH EVENT LISTENERS
        function validate_name(){
            name_outcome = validate.validateStr(name); //bool
            
            if(!name_outcome){ //if incorrect data - inform user
                $('#name_error').text('* please enter a valid name');
            }else{
                $('#name_error').text('');
            }
            checkForm();
        }
        
        function validate_email(){
            email_outcome = validate.validateEmail(email); //bool
            
            if(!email_outcome){ //if incorrect data - inform user
                $('#email_error').text('* please enter a valid email address');
            }else{
                $('#email_error').text('');
            }
            checkForm();
        }
        
        function validate_tel(){
            tel_outcome = validate.validateTel(tel); //bool
            
            if(!tel_outcome){ //if incorrect data - inform user
                $('#tel_error').text('* please enter a valid telephone number');
            }else{
                $('#tel_error').text('');
            }
            checkForm();
        }
        
        function validate_msg(){
            msg_outcome = validate.validateStr(msg); //bool
    
            //inform user when maximum limit reached
            if(this.value.length === 500){
                let value = this.value;
                let value_length = value.length;
                let new_value = value.substr(0, value_length-1);
                this.value = new_value;
                return;
            }
    
            if(this.value.length >= 499){
                $('#msg_error').text('Maximum limit reached');
                return;
            }
            
            if(!msg_outcome){ //if incorrect data - inform user
                $('#msg_error').text('* please enter a message');
            }else{
                $('#msg_error').text('');
            }
            
            checkForm();
        }
        
        //EVENT LISTENERS
        name.addEventListener('keyup', validate_name);
        name.addEventListener('focus', validate_name);  
        name.addEventListener('blur', validate_name);
        
        
        email.addEventListener('keyup', validate_email);
        email.addEventListener('focus', validate_email);
        email.addEventListener('blur', validate_email);
        
        
        tel.addEventListener('keyup', validate_tel);
        tel.addEventListener('focus', validate_tel);
        tel.addEventListener('blur', validate_tel);
        
        
        msg.addEventListener('keyup', validate_msg);
        msg.addEventListener('focus', validate_msg);
        msg.addEventListener('blur', validate_msg);
        
    
    })
}