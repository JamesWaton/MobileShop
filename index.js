  
$(document).ready(function(){

 // connecting banner owl carousel with jQuery
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    //top sale carosel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        //setting how many items are shown depending on how big the screen is
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
    
        }
        
    });
});