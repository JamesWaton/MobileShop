<?php
ob_start();

// php cart
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // insert into cart(cart_id) value(0)"
                //get table columns
                // , used to separate array values
                $columns = implode(',', array_keys($params));


                $values = implode(',' , array_values($params));


                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s)VALUES(%s)",$table,$columns,$values);


                //execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }
    // getting user_id and item_id and insert it into cart table
    public function addToCart($userid, $itemid){
        if(isset($userid)&&isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            //insert dara into cart
            $result = $this->insertIntoCart($params);
            if($result){
                //Reload Page g
                header("location:" .$_SERVER['PHP_SELF']);

            }
        }
    }
    // delete phone from cart using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
    $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
    if($result){
        header("Location:" .$_SERVER['PHP_SELF']);
    }
    return $result;
        }
    }

    //calculating full price
    public function getSum($arr){
        if(isset($arr)){
            $sum =0;
            foreach($arr as $item){
                //getting the floating value of the product
                $sum += floatval($item[0]);
                }
            //covert this sum and specify 2 digits to the number
            return sprintf('%.2f',$sum);
        }
    }

    // making sure you cant add the same item
    // get item_id of the shopping cart list
    public function getCartId($cartArray = null, $key="item_id"){
        if($cartArray != null){
            $cart_id = array_map(function ($value)use($key){
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }

    //Save for later
    public function saveForLater($item_id =null,$saveTable= "wishlist",$fromTable="cart"){
        if($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
            echo $query;

            //execute multiple query
            $result = $this->db->con->multi_query($query);
            if($result){
                header("Location:" .$_SERVER['PHP_SELF']);
                return $result;
            }

        }
    }


}


