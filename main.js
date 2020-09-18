
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

    // //Qty section
    // let $qty_up = $(".qty .qty-up");
    //  let $qty_down = $(".qty .qty-down");
    //  // let $input = $(".qty .qty_input");

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

    //   //click on qty down button min 1
    //   $qty_up.click(function(e){
    //      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    //      if($input.val() > 1 && $input.val() <= 10){
    //          $input.val(function(i, oldval){
    //              return --oldval;
    //          });
    //      }
    //  });



    //Created this page as original index.js didn't work for the cart page.


    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        //$.ajax({uri: "template/ajax.php", type : 'POST', data : { itemid : $(this).data("id")},dataType: 'json', complete: function(result){
        $.ajax({url: "Template/ajax.php", type : 'POST', data : { itemid : $(this).data("id")}, success: function(result){
               console.log(result);
               // trying to return result into an object
                let obj = JSON.parse(result);
                console.log(obj);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                //increase the price of the product   this times the price by the new input up to 2 digits
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));
                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty down button


});