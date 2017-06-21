<?php
// PHP code goes here
session_start();

$user ="root";
$pw = "";
$db = "tsarbucks";
$currentOrder = 0;

//Array to convert product id to display name
$productArray = array("1"=>"Arabian Nights", "2"=>"Cave of Wonders", "3"=>"Diamond in the Rough","4"=>"Aladdin apples","5"=>"Jasmine Tea",
	"6"=>"Genie granola","7"=>"Iago crackers","8"=>"Abu bananas","9"=>"Sultan smoothie","10"=>"Rajah roast");

//Array to convert product id to price
$priceArray = array("1"=>"5","2"=>"7.5","3"=>"10.00","4"=>"6.00","5"=>"12.00","6"=>"10.00","7"=>"20.00","8"=>"15.00","9"=>"15.00","10"=>"15.00");

$db = new mysqli("p:localhost", $user, $pw, $db); // connection using localhost (UNIX socket)

// did the connection fail?
if($db->connect_error) {
   // display an error message and halt the execution of the script
   die("Could not connect to the database: " . $db->connect_error);
}

if(!empty($_POST)){
	//A Barista has marked an order completed
		echo "So you marked an order complete, eh?";
		$replace = 1;
		$search = $_POST['completed'];
		$pid = $_POST['product_id'];
		if($db->query("UPDATE orders SET completed = '$replace' WHERE (order_id = '$search' AND product_id = '$pid')")) {
			//We updated the DB, now lets reload the page correctly.
   			header("Location: BaristaHome.php");
        	exit();
		}
}

if($_SESSION['email'] == "customer"){
	//I am a customer
	$runningTotal = 0;
	if($result = $db->query("SELECT * FROM orders")) {
   		while($obj = $result->fetch_object()) { // iterate over retrieved records/rows

   	   		$pid = $obj->product_id;  //save out the product id to use later
   	   		$currentQty = $obj->quantity;
   	   		$currentPrice = $priceArray[$pid];
   	   		$order_id = $obj->order_id;

   	   		if($obj->completed == 1){
   	   			$completed = "Completed!";
   	   		} else {
   	   			$completed = "Pending";
   	   		}
   			if($currentOrder != $obj->order_id){
   				//The order id has changed, this is a new order, make a header, and print a line.
   				$currentOrder = $obj->order_id;  //save out the new order id
   				if($runningTotal != 0){  //check and make sure that the order running total isn't zero. It IS zero when the loop begins so don't print
   					echo "Order Total: $$runningTotal";
   					$runningTotal = 0;
   				}
   				echo "<h1>Order: $currentOrder</h1> <span><h5>$obj->created_at</h5></span>";
   				echo "<p>Product: $productArray[$pid] Quantity: $obj->quantity Price: $$priceArray[$pid] Completed?: $completed";
   				echo "<br/>";
   				$runningTotal = $runningTotal + ($currentQty * $currentPrice);  //do some math
   			} else {
   				//this is the same order id, just keep adding and printing order lines
   				$runningTotal = $runningTotal + ($currentQty * $currentPrice);  //do more math
				echo "<p>Product: $productArray[$pid] Quantity: $obj->quantity Price: $$priceArray[$pid] Completed?: $completed";
   				echo "<br/>";
   			}
   			
   		}
   		echo "Order Total: $$runningTotal";   //We need to print the total for the very last object in the db or it will be forgotten
   		$_SESSION['order_id'] = ($order_id + 1); //save out the next order id to be used when a customer creates an order
   		$result->close(); // free result set
	} 
} else {
	//I am a coffemaker
	if($result = $db->query("SELECT * FROM orders")) {
   		while($obj = $result->fetch_object()) { // iterate over retrieved records/rows
   	   		$pid = $obj->product_id;
   			if($currentOrder != $obj->order_id){
   				$currentOrder = $obj->order_id;
   				//new order

   				echo "<h1>Order: $currentOrder</h1> <span><h5>$obj->created_at</h5></span>";
   				if($obj->completed == 0){
   					//Order isn't completed
   					echo "<p>Product: $productArray[$pid] Quantity: $obj->quantity Price: $$priceArray[$pid]";
   					echo "<form action='HomeProcessing.php' method='post'>";
					echo "<button type='submit' name='completed' class='btn btn-warning' value='$obj->order_id'>Mark Completed</button>";
					echo "<input type='hidden' value='$pid' name='product_id'>";
					echo "</form>";
   					echo "<br/>";
   				} else {
   					echo "<p>Product: $productArray[$pid] Quantity: $obj->quantity Price: $$priceArray[$pid] Completed!";
   					echo "<br/>";	
   				}

   			} else {
   				//On the same order
   				
   				if($obj->completed == 0){
   					//Order isn't completed
   					echo "<p>Product: $productArray[$pid] Quantity: $obj->quantity";
   					echo "<form action='HomeProcessing.php' method='post'>";
					echo "<button type='submit' name='completed' class='btn btn-warning' value='$obj->order_id'>Mark Completed</button>";
					echo "<input type='hidden' value='$pid' name='product_id'>";
					echo "</form>";
   					echo "<br/>";
   				} else {
   					echo "<p>Product: $productArray[$pid] Quantity: $obj->quantity Completed!";
   					echo "<br/>";	
   				}
   			}
   		}
   		$result->close(); // free result set
	} 
	}
?>