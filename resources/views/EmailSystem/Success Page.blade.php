
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

    <title>AdamMail.com</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">AdamMail</a> 
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search your Mail">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          <a class="btn " href="../emailsystem" role="button">Sign out?</a>
        </form>
      </div>
    </nav>


  <div class="row" style="margin-top:5%">
    <div class="col-sm-2">
        <ul class="list-group">
          <a class="btn btn-primary btn-lg" href="Compose New Message.html" role="button">Compose</a>
          <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="inbox" role="button">Inbox</a>
            <span class="badge badge-default badge-pill">14</span>
          </li>
            <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="starred" role="button">Starred</a>
           <span class="badge badge-default badge-pill">2</span>
          </li>
          <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="important" role="button">Important</a>
            <span class="badge badge-default badge-pill">1</span>
          </li>
          <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="sent" role="button">Sent</a>
            <span class="badge badge-default badge-pill">1</span>
          </li>
          <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="drafts" role="button">Drafts</a>
            <span class="badge badge-default badge-pill">1</span>
          </li>
          <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="spam" role="button">Spam</a>
            <span class="badge badge-default badge-pill">20</span>
          </li>
          <li class="list-group-item justify-content-between">
            <a class="btn btn-secondary" href="trash" role="button">Trash</a>
            <span class="badge badge-default badge-pill">4</span>
          </li>
        </ul>
    </div>

    <div class="col-sm-1">
    </div>

    <div class="col-sm-5">
     <h1>New Message</h1>
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Recipient</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Your Message</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File Upload</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">File size is limited only by your imagination</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Send</button>
  <div class="alert alert-success" role="alert">
  <strong>Success!</strong> You have sent an email!
  </div>
  </form>
  </div>

    <div class="col-sm-4">
      <h1>Trending</h1>
      <div class="list-group">
       <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
         <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">CSUN to become CS only University</h5>
          <small>3 days ago</small>
          </div>
          <p class="mb-1">Today the CSUN president announced the closing of all departments, and the extension of the Computer Science department to take over the whole school</p>
          </a>
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Barack Obama actually from Kenya</h5>
          <small class="text-muted">5 days ago</small>
          </div>
          <p class="mb-1">Documents have been revealed indicating that Barack Obama is actually from Kenya</p>
          </a>
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Donald Trump is actually an Orange</h5>
          <small class="text-muted">7 days ago</small>
          </div>
          <p class="mb-1">Classified sources have indicated that Donald Trump is indeed an Orange. It has not been confirmed if he has seeds or is of the seedless variety</p>
          </a>
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Papa Smurf to run for president in 2020</h5>
          <small class="text-muted">10 days ago</small>
          </div>
          <p class="mb-1">Soon the White House maybe getting a bit more blue, sources have told us that the Papa Smurf himself has announced his bid for the 2020 presidency</p>
          </a>
        </div>  
      </div>
    </div>
  </body>
</html>
