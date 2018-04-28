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