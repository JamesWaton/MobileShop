<?php
//Require MySQl Connection
require('database/DBController.php');


//Require product class
require('database/product.php');
//Require Cart class
require('database/Cart.php');

//DBController object
$db= new DBController();

//Product
$product = new product($db);
$product_shuffle = $product->getData();

// Cart Object
$Cart = new Cart($db);





