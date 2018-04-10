$(function(){
    
    //apply background color to navbar when user begins to scroll
    $(window).scroll(function(){
        var scroll = $(window).scrollTop(); //find no. of pixels from top of screen
        if(scroll>50){ //when number of pixels from top exceeds 50 apply change
            $('nav').addClass('white');
            $('.navbar-brand').addClass('brand');
        }else{ //if user returns to top of page - remove classes which applied change
            $('nav').removeClass('white');
            $('.navbar-brand').removeClass('brand');
        }
    })
})