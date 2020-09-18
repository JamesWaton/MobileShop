
<?php
ob_start();
// include header.php file
include('header.php');
?>

<?php
//include cart items if it is not empty
// Start shopping cart section
count($product->getData('cart')) ? include('Template/_cart-template.php'):include('Template/notFound/_cart_notFound.php');
//include cart items if it is not empty
//End shopping cart section

// Start shopping cart section
count($product->getData('wishlist')) ? include('Template/_wishlist_template.php'):include('Template/notFound/_wishlist_notFound.php');
//End shopping cart section

//Start New Phones Section
include('Template/_new-phones.php');
//end New Phones Section



?>


<?php
// include footer.php file
include('footer.php');
?>