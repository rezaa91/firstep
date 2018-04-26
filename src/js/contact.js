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
            //need regExp for email address
        }
        
        validateTel(num){
            //need regExp for tel number
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
    /*user validateStr method for all at the moment until other methods correctly configured*/
    name.addEventListener('keyup', function() {
        name_outcome = validate.validateStr(name); //bool
        
        if(!name_outcome){ //if incorrect data - inform user
            $('#name_error').text('* please enter a valid name');
        }else{
            $('#name_error').text('');
        }
        checkForm();
    })
    
    
    email.addEventListener('keyup', function(){
        email_outcome = validate.validateStr(email); //bool
        
        if(!email_outcome){ //if incorrect data - inform user
            $('#email_error').text('* please enter a valid email address');
        }else{
            $('#email_error').text('');
        }
        checkForm();
    })
    
    
    tel.addEventListener('keyup', function() {
        tel_outcome = validate.validateStr(tel); //bool
        
        if(!tel_outcome){ //if incorrect data - inform user
            $('#tel_error').text('* please enter a valid telephone number');
        }else{
            $('#tel_error').text('');
        }
        checkForm();
    })
    
    
    msg.addEventListener('keyup', function() {
        msg_outcome = validate.validateStr(msg); //bool
        
        if(!msg_outcome){ //if incorrect data - inform user
            $('#msg_error').text('* please enter a message');
        }else{
            $('#msg_error').text('');
        }
        
        checkForm();
    })
    

})