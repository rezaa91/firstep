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
    
    
})