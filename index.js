
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
<<<<<<< HEAD
            }
        }


    });
    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    //filter items when you click the button
    $(".button-group").on("click","button",function(){
        var filterValue =$(this).attr("data-filter");
        $grid.isotope({filter:filterValue});

    })

    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        //setting how many items are shown depending on how big the screen is
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // Blog Section owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        //setting how many items are shown depending on how big the screen is
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },

        }
    });
    //skip these comments just for personal reference
=======
            }    
        }
       
        
    }); 
    //isotope filter
      var $grid = $(".grid").isotope({
          itemSelector:'.grid-item',
          layoutMode:'fitRows'
      });

      //filter items when you click the button
$(".button-group").on("click","button",function(){
    var filterValue =$(this).attr("data-filter");
    $grid.isotope({filter:filterValue});

}) 

  // new phones owl carousel
  $("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    //setting how many items are shown depending on how big the screen is
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000 : {
            items: 5
        }
    }
});

  // Blog Section owl carousel
  $("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    //setting how many items are shown depending on how big the screen is
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
    
    }
});

>>>>>>> f4c8bd43a9ce7dfd7d80146a384affe54a1d00d4
    // //Qty section
    // let $qty_up = $(".qty .qty-up");
    //  let $qty_down = $(".qty .qty-down");
    //  // let $input = $(".qty .qty_input");
<<<<<<< HEAD

=======
 
>>>>>>> f4c8bd43a9ce7dfd7d80146a384affe54a1d00d4
    // // click on qty up button max 10 put <= to 9 as we start with 1
    // $qty_up.click(function(e){
    //     //this is so that it only effects the box that is being changed and not all phones Qty 2:15.
    //     let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    //     if($input.val() >= 1 && $input.val() <= 9){
    //         $input.val(function(i, oldval){
    //             return ++oldval;
    //         });
    //     }
    // });
<<<<<<< HEAD

=======
 
>>>>>>> f4c8bd43a9ce7dfd7d80146a384affe54a1d00d4
    //   //click on qty down button min 1
    //   $qty_up.click(function(e){
    //      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    //      if($input.val() > 1 && $input.val() <= 10){
    //          $input.val(function(i, oldval){
    //              return --oldval;
    //          });
    //      }
    //  });
<<<<<<< HEAD







    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click on qty up button


        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

    // click on qty down button
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });


=======
  
>>>>>>> f4c8bd43a9ce7dfd7d80146a384affe54a1d00d4


});