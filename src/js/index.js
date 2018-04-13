$(function(){
    
    let screen_height = $(window).height();//height of screen
    let activation_offset = 0.5;    
    
    
    //header effects - slogan to appear gradually
    $('#header-content').hide().delay(600).fadeIn(1000); //delay header content on load before fading in
    $('.slogan').css('opacity','0'); //give slogan 0 opacity to appear after header content faded in
    
    //fade in slogan sentences individually after header content faded in
    $('.slogan').each(function(i){
        $(this).delay(1600).delay(i*1000).animate({
            opacity:1,
            fontSize:28
        },500);
    })
    
    //give animation to main btn
    $('#main_btn').animate({
        padding:50
    },1000,function(){
        $(this).animate({
            padding: 6.5
        },500)
    })
    
    
    
    
    
    
    
    //about section effects
    $('.about-column').css('opacity','0');
    let about_pos = $('#about').offset().top;
    let about_activation_point = about_pos - (screen_height * activation_offset);
    $(window).scroll(function(){
        let y_scroll_pos = window.pageYOffset;
        let el_in_view = y_scroll_pos > about_activation_point;
        
        if(el_in_view){
            $('.about-column').each(function(i){
              $(this).delay(i*400).animate({
                  opacity:1
              },500);  
            })
        }
    })
    
    
    
    
    
    //testomonials
    //card deck not to be visible to user on startup
    $('.card').css('opacity','0');
    //get position of div in which to begin fadein of opacity for card-deck
    let el_position = $('#testomonials').offset().top;
    let activation_point = el_position - (screen_height * activation_offset);
    
    
    //function which fades in card-deck when scrolled to it
    $(window).scroll(function(){
       let y_scroll_pos = window.pageYOffset;
        
        let el_in_view = y_scroll_pos > activation_point;
        
        if(el_in_view){  
            $('.card').each(function(i){
              $(this).delay(i*300).animate({
                  opacity:1
              },500);  
            })
        }
    })
    
    

    
    
})