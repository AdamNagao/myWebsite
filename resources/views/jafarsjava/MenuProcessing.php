<?php
  session_start();

  if (!empty($_POST)) {
    $productArray = array("1"=>"Arabian Nights", "2"=>"Cave of Wonders", "3"=>"Diamond in the Rough","4"=>"Aladdin apples","5"=>"Jasmine Tea",
      "6"=>"Genie granola","7"=>"Iago crackers","8"=>"Abu bananas","9"=>"Sultan smoothie","10"=>"Rajah roast");

    $sizeArray = array("1"=>"Lamp","2"=>"3 Wishes","3"=>"Genie");
    if(!empty($_POST['selection'])){
          $size = $_POST['selection'];
    } else {
      $size = 3;
    }
    $item = $_POST['item'];

    $user ="root";
    $pw = "";
    $db = "tsarbucks";

    // Two options (both persistent connections); pick the one that works for your system:
    $db = new mysqli("p:localhost", $user, $pw, $db); // connection using localhost (UNIX socket)

    // did the connection fail?
    if($db->connect_error) {
    // display an error message and halt the execution of the script
     die("Could not connect to the database: " . $db->connect_error);
    }
    // otherwise, the connection was successful and we can proceed with
    // our database operations

    //MySqli Insert Query
    $insert_row = $db->query("INSERT INTO cart (product_id, size) VALUES($item, $size)");

    if($insert_row){
      echo ($productArray[$item] . " in size " . $sizeArray[$size] . " " . "Added to cart!"); 
    }else{
        die('Error : ('. $db->errno .') '. $db->error);
    }

    
  }

?>