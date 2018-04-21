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
        let activation_offset = 0.5;
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
    dom.hide('.banner-img'); //hide banner img
    dom.hide('.about-section'); //hide 'our mission' section
    
    //animate elements
    dom.fadeIn('.header-title',400,800); //fade main title on startup
    dom.scroll('.banner-img'); //fade images in on scroll
    dom.scroll('.about-section'); //fade about section in on scroll
    
})