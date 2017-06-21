<?php
// PHP code goes here
session_start();
//Array t convert product id to displayname
$productArray = array("1"=>"Arabian Nights", "2"=>"Cave of Wonders", "3"=>"Diamond in the Rough","4"=>"Aladdin apples","5"=>"Jasmine Tea",
"6"=>"Genie granola","7"=>"Iago crackers","8"=>"Abu bananas","9"=>"Sultan smoothie","10"=>"Rajah roast");
//Array to convert product id to price
$priceArray = array("1"=>"5","2"=>"7.5","3"=>"10.00","4"=>"6.00","5"=>"12.00","6"=>"10.00","7"=>"20.00","8"=>"15.00","9"=>"15.00","10"=>"15.00");
//Array to convert size id to displayname
$sizeArray = array("1"=>"Lamp","2"=>"3 Wishes","3"=>"Genie");

$user ="root";
$pw = "";
$db = "tsarbucks";
$db = new mysqli("p:localhost", $user, $pw, $db); // connection using localhost (UNIX socket)

// did the connection fail?
if($db->connect_error) {
   // display an error message and halt the execution of the script
   die("Could not connect to the database: " . $db->connect_error);
}

$runningTotal = 0;
if($result = $db->query("SELECT * FROM cart")) {
   while($obj = $result->fetch_object()) { // iterate over retrieved records/rows
      $pid = $obj->product_id;  //save out product id
      $size_id= $obj->size; //save out size id
      $runningTotal = $runningTotal + $priceArray[$pid];
      echo "<p>Product: $productArray[$pid] Size: $sizeArray[$size_id] Price: $$priceArray[$pid]</p>";
      echo "<form action='CartProcessing.php' method='post'>";
      echo "<button type='submit' name='remove' class='btn btn-warning' value='1'>Remove Item</button>";
      echo "<input type='hidden' value='$pid' name='product_id'>";
      echo "</form>";
      echo "<br/>";
   }
   echo "Order Total: $$runningTotal";
   $result->close(); // free result set
}

if(!empty($_POST)) {

   if(!empty($_POST['empty']) and $_POST['empty'] == 1){
      //the user wants to clear the cart
      echo "So you want to clear the cart do you";
      if($db->query("DELETE FROM cart")) {
         //Goodbye Database!
         header("Location: cart.php");
         exit();
      }
   } 
   else if (!empty($_POST['order']) and $_POST['order'] == 1){
      //the user wants to order the cart
      echo " I guess you can buy stuff if you really want";
      $oid = $_SESSION['order_id'];

      if($result = $db->query("SELECT * FROM cart")) {
         while($obj = $result->fetch_object()) { // iterate over retrieved records/rows
            $pid = $obj->product_id;  //save out product id
            $size_id= $obj->size; //save out size id

            $insert_row = $db->query("INSERT INTO orders (order_id, user_id, product_id, quantity) VALUES($oid,'1',$pid,'1')");

            if($insert_row){
               echo ($productArray[$pid] . " in size " . $sizeArray[$size_id] . " " . "Added to cart!"); 
            } else{
            die('Error : ('. $db->errno .') '. $db->error);
            }
         }
      }

      $result->close(); // free result set

      if($db->query("DELETE FROM cart")) {
         //Goodbye Database!
         header("Location: cart.php");
         exit();
      }
   }
   else if ($_POST['remove'] == 1){
      //NOTE, TO DO.....DELETE THE ITEM FROM THE DATABASE 
      $pid = $_POST['product_id'];

      if($db->query("DELETE FROM cart WHERE product_id = '$pid' ")) {
         //Goodbye Database!
         header("Location: cart.php");
         exit();
      }
   }
}  
?>