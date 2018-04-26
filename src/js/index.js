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
            opacity:1,
            fontSize:28
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
    
    
})