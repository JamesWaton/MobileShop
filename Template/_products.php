<!-- Start product -->

<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
?>



<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ??"./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control"> Proceed to buy</button>

                    </div>
                    <div class="col">
                        <?php
                        if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type = "submit" disabled class="btn btn-success font-size-14 form-control" > In the Cart </button >';
                        }else {
                            echo '<button type = "submit" name = "top_sale_submit" class="btn btn-warning font-size-16 form-control" > Add to Cart </button >';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown";?></h5>
                <small>By <?php echo $item['item_brand']??"Brand";?> </small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="mg-0">
                <!-- Start Product price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Was:</td>
                        <td><strike>$1620.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <!-- &nbsp;&nbsp; is non-breaking space -->
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']??"Unknown";?></span><small class="text-dark font-size-12"> &nbsp;&nbsp;Includes all Taxes</small></td>

                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>

                        <td ><span class="font-size-16 text-danger">$100.00</span></td>

                    </tr>
                </table>
                <!-- End Product price -->


                <!--Start Policy Sectio -->

                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-14">10 Days</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-14">Next Day shipping</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-14">2 years warranty</a>
                        </div>
                    </div>

                </div>
                <!--End Policy Sectio -->
                <hr>

                <!-- Start order details -->

                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: Sep 13 - Sep 16</small>
                    <small>Sold By <a href="#">James Watson</a> (4.8 out of 5 |over 18,000 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -731503</small>
                </div>

                <!-- End order details -->

                <!-- Start color&Qty choice -->
                <div class="row">
                    <div class="col-6">
                        <!-- Start color choise -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>

                        <!-- End color choice -->
                        <!-- start Qty button choice -->
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <!-- disabled to user can't right in the box will use Js to make it increase a decrease by one -->
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <!-- end Qty button choice -->

                        </div> </div>


                </div>
                <!-- End color&Qty choice -->

                <!-- Start size section  -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB Ram</button>
                            <button class="btn p-0 font-size-14">6GB Ram</button>
                            <button class="btn p-0 font-size-14">8GB Ram</button>
                        </div>
                    </div>
                </div>
                <!-- End size section  -->

            </div>
            <!-- Start Prodct Description -->
            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <!-- calling loremtext for the text -->
                <div class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores placeat accusamus nam rerum aliquid hic sunt quos, natus rem esse porro quasi, odit, blanditiis velit iusto. Voluptatem iste odio dolor.

                    <div class="font-rale font-size-14"> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores placeat accusamus nam rerum aliquid hic sunt quos, natus rem esse porro quasi, odit, blanditiis velit iusto. Voluptatem iste odio dolor.



                    </div>
                </div>
                <!-- End Prodct Description -->
            </div>
        </div>

</section>
<!-- End product -->

<?php
endif;

endforeach;
?>