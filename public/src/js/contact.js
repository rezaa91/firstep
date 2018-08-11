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