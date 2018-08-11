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