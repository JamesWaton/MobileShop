<!-- Start shopping cart section -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    // save for later
    if(isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>
     <div class="container-fluid w-75">
        <h5 class= "font-baloo font-size-20">Shopping Cart </h5>

        <!-- Start cart items  -->
        <div class="row">
            <div class="col-sm-9">

                <?php
                foreach($product->getData('cart')as $item):
                    $cart=$product->getProduct($item['item_id']);
                //important to uses [] to make sure it stores all the item prices in the cart
                    $subTotal[] = array_map(function($item){
                ?>
                <!-- Start Cart item -->
                <div class="row border-top py-3 mb-5 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"  ?>" style="height:120px;" alt="cart1">

                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by<?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <!-- start product Rating Section -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">5,465 ratings</a>

                        </div>
                        <!-- end product Rating Section -->
                        <!-- start Product quantaty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <!-- php to target the individual id rather then the set id-->
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-up"></i></button>
                                <!-- disabled to user can't right in the box will use Js to make it increase a decrease by one -->
                                <input type="text" data-id="<?php echo $item['item_id'] ??'0';?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ??'0';?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            </form>


                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name= " wishlist-submit" class="btn font-baloo px-3 ">Save for later</button>
                            </form>

                        </div>
                        <!-- end Product quantaty -->

                    </div>

                    <div class="col-sm-2text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                        </div>
                    </div>



                </div>
                <!-- End cart items  -->
                <?php
                        return$item['item_price'];
                     },$cart);// this is the closing of the array map

                endforeach;

                ?>

            </div>

            <!-- Start total section -->
            <div class="col-sm-3">
                <div class="sub-total text-center mt-2">
                    <h6 class="font-size-14 font-rale text-success py-3"> <i class="fa fa-check"> </i> Free Delivery on orders over $1,000</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
         <!--  !shopping cart items   -->
     </div>
</section>
<!-- !Shopping cart section  -->

