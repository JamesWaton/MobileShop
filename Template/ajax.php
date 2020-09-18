<?php
// set the ajax file to add the cost of two of the same phones together so then can be added with the other items for the final price


// require MySQL Connection
require ('../database/DBController.php');

// require Product Class
require ('../database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if(isset($_POST['itemid'])){
    // with the item id i will get the data an
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
