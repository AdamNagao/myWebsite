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
                    </div>
                  </nav>
                  <div class="container">
                    <div class="row" style="margin-top:10%" >
                      <div class="col-xs-3 col-sm-3 col-md-3"></div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                            <h2>Please Sign In</h2>
                            <?php include 'LoginProcessing.php'; ?>
                           <form method="post" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
                              <input type="text" name="first" />
                              <input type="text" name="second" />
                              <input type="submit" value="Submit"/>
                            </form>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3"></div>
                              </div>
                            </div>
                          </div>
                        </body>
                      </html>
  