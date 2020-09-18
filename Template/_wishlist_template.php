<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart','wishlist');
    }
}
?>
     <div class="container-fluid w-75">
        <h5 class= "font-baloo font-size-20">Wishlist</h5>

        <!-- Start cart items  -->
        <div class="row">
            <div class="col-sm-9">

                <?php
                foreach($product->getData('wishlist')as $item):
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

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                            </form>


                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="cart-submit"class="btn font-baloo px-3 ">Add to Cart</button>
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
        </div>
         <!--  !shopping cart items   -->
     </div>
</section>
<!-- !Shopping cart section  -->

