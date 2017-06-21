<?php
  session_start();
  if (!empty($_POST)) {
    $_SESSION["email"] = $_POST['first'];
    $_SESSION["password"] = $_POST['second'];

    
    $booleanUser = false;
    $booleanPassword = false;
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
    $temp = 0;
    if($result = $db->query("SELECT * FROM users")) {
      while($obj = $result->fetch_object()) { // iterate over retrieved records/rows
        if($obj->username == $_SESSION['email']){
          $booleanUser = true;
        }
        if($obj->password == $_SESSION['password']){
          $booleanPassword = true;
        }
      }
      $result->close(); // free result set
    }


    if($booleanUser == true && $booleanPassword ==true){
      if($_SESSION['email'] == "customer"){
        header("Location: CustomerHome.php");
        exit();
      } else {
        header("Location: BaristaHome.php");
        exit();
      }
    } else {
      echo "You aren't in our database, get out. Maybe Try customer:password, or barista:password.";
    }
    } 
?>