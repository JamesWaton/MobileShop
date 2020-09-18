<!-- Start Special Price-->
<?php
// adding new product brand
$brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
$unique = array_unique($brand);
sort($unique);



$product_shuffle = $product->getData();
shuffle($product_shuffle);

 if($_SERVER['REQUEST_METHOD']=="POST"){
     if(isset($_POST["special_price_submit"])){
     // call method to addToCart
     $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
     }
 }
 //allowing me to use the cart id method from outside
 $in_cart =  $Cart->getCartId($product->getData('cart'));


?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special-Price</h4>
        <!--Making the filter section for each brand-->
        <div id="filter" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="">All Brands</button>
            <?php
            //setting this section up with php allows it to be easier to add new branded items by just doing it through my SQL
            array_map(function ($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            },$unique);
            ?>

        </div>
        <div class="grid">
            <?php
            //it will the product shuffle array one by one and display them using this function
            //add use so we can use this variable for the add to cart button
            array_map(function ($item) use( $in_cart){ ?>
            <div class="grid-item border <?php echo $item['item_brand']?? "Brand";?>">
                <div class="item py2" style="width:200px">
                    <div class="product font-rale">
                                                                                                               <!-- if this value is empty then display -->
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/13.png";?>" alt="product1" class = "img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown";?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?? "0";?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <?php
                                //checking to see if the item is already in the cart is turns button green and so you cant add it again
                                if(in_array($item['item_id'],  $in_cart)){
                                    echo '<button type = "submit" disabled class="btn btn-success font-size-12" > In the Cart </button >';

                                }else {
                                    echo '<button type = "submit" name = "top_sale_submit" class="btn btn-warning font-size-12" > Add to Cart </button >';
                                }
                                ?>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <?php   }, $product_shuffle)         ?>


        </div>
    </div>

</section>
<!-- End Special Price-->
