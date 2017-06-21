<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jafar's Java</title>

    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
     <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Jafar's Java</a> 
      <a class="btn" href="login.html" role="button">Sign out?</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="CustomerHome.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Your Cart</a>
          </li>
        </ul>
      </div>
    </nav>

<div class="container">
  <div class="row" style="margin-top:10%" >
      <div class="col-xs-1 col-sm-1 col-md-1"></div>
    
      <div class="col-xs-8 col-sm-8 col-md-8">
            <?php require 'MenuProcessing.php'; ?>
        <h2>Drinks</h2>
          <p>Sizes: Lamp(Small), 3 Wishes(Medium), Genie(Large)</p>
          <ul class="list-group">
            <li class="list-group-item justify-content-between";>Arabian Nights
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <select name="selection">
                  <option value="1">Lamp</option>
                  <option value="2">3 Wishes</option>
                  <option value="3">Genie</option>
                </select>
                <button type="submit" name="item" class="btn btn-warning" value="1">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between";>Cave of Wonders
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <select name="selection">
                  <option value="1">Lamp</option>
                  <option value="2">3 Wishes</option>
                  <option value="3">Genie</option>
                </select>
                <button type="submit" name="item" class="btn btn-warning" value="2">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between";>Diamond in the Rough
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <select name="selection">
                  <option value="1">Lamp</option>
                  <option value="2">3 Wishes</option>
                  <option value="3">Genie</option>
                </select>
                <button type="submit" name="item" class="btn btn-warning" value="3">Order!</button>
              </form>
            </li>
             <li class="list-group-item justify-content-between";>Jasmine Tea
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <select name="selection">
                  <option value="1">Lamp</option>
                  <option value="2">3 Wishes</option>
                  <option value="3">Genie</option>
                </select>
                <button type="submit" name="item" class="btn btn-warning" value="4">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between";>Rajah Roast
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <select name="selection">
                  <option value="1">Lamp</option>
                  <option value="2">3 Wishes</option>
                  <option value="3">Genie</option>
                </select>
                <button type="submit" name="item" class="btn btn-warning" value="5">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between";>Sultan smoothie
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <select name="selection">
                  <option value="1">Lamp</option>
                  <option value="2">3 Wishes</option>
                  <option value="3">Genie</option>
                </select>
                <button type="submit" name="item" class="btn btn-warning" value="6">Order!</button>
              </form>
            </li>
          </ul>

        <h2>Foods</h2>
          <ul class="list-group">
            <li class="list-group-item justify-content-between">Aladdin Apples
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <button type="submit" name="item" class="btn btn-warning" value="4">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between">Iago Crackers
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <button type="submit" name="item" class="btn btn-warning" value="7">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between">Genie Granola
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <button type="submit" name="item" class="btn btn-warning" value="6">Order!</button>
              </form>
            </li>
            <li class="list-group-item justify-content-between">Abu Bananas
              <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                <button type="submit" name="item" class="btn btn-warning" value="8">Order!</button>
              </form>
            </li>
          </ul>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1"></div>
    </div>
  </div>
</div>

  </body>
</html>
	