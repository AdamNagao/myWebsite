
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-bottom: 40px;
  color: #5a5a5a;
}


/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}
        .masthead-brand {
            margin-top: 10px;
            margin-bottom: 10px;
            color:white;
        }
        .masthead-nav > li {
            display: inline-block;
        }
        .masthead-nav > li + li {
            margin-left: 20px;
        }
        .masthead-nav > li > a {
            padding-right: 0;
            padding-left: 0;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            /* IE8 proofing */
            
            color: rgba(255, 255, 255, .75);
            border-bottom: 2px solid transparent;
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
            background-color: transparent;
            border-bottom-color: #a9a9a9;
            border-bottom-color: rgba(255, 255, 255, .25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
            color: #fff;
            border-bottom-color: #fff;
        }
        @media (min-width: 768px) {
            .masthead-brand {
                float: left;
            }
            .masthead-nav {
                float: right;
            }
        }

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
  }

  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 120px;
  }
}
    </style>
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <h3 class="masthead-brand">Adam Nagao's Website</h3>
           <nav>
              <ul class="nav masthead-nav">
                <li><a href="myWebsite/public/">Home</a>
                </li>
                <li class="active"><a href="projects">Projects</a>
                </li>
                <li><a href="contact">Contact</a>
                </li>
              </ul>
            </nav>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/myWebsite/resources/views/images/quickenrobot.jpg" alt="quickenrobot">
        <h1>Quicken Loans Rocket Mortgage Commercial</h1>
        <p>A Robot Built for a Quicken Loan commercial featuring battlebots!</p>
    </div>

    <div class="item">
      <img src="/myWebsite/resources/views/images/wheretoeatIcon.jpg" alt="wheretoeatIcon">
        <h1>Where to Eat App!</h1>
        <p>A Web application developed with HTML,CSS,Javascript,PHP,Bootstrap, and Laravel. Reviewers can browse and review restaurants created by Admin users.</p>
    </div>

    <div class="item">
      <img src="/myWebsite/resources/views/images/2nd60robot.jpg" alt="syntaxerror">
        <h1>Syntax Error Robotic's 2nd 60lb Combat Robot</h1>
        <p>A 60lb Combat Robot designed using Auto Desk Inventor, Auto Desk Fusion360, Waterjet 6061 Alumnium, 3D printed Pulleys, 4 Wheel belt drive, Chromoly Vertical Disc Weapon</p>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/hangmanIcon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Hangman Game</h2>
          <p>A Hangman game made with HTML,CSS,Javascript, and JQuery</p>
          <p><a class="btn btn-default" href="hangmangame" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/jafarsjavaIcon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Jafar's Java</h2>
          <p>A Disney Aladdin themed coffee restaurant order system where customers can place orders and view orders. Baristas can view, and complete orders made by customers. This project was developed in HTML,CSS,Javascript, PHP, and mySQL.</p>
          <p><a class="btn btn-default" href="jafarsjava" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/wheretoeatIcon.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>WhereToEat App</h2>
          <p>A Web application developed with HTML,CSS,Javascript,PHP,Bootstrap, and Laravel. Reviewers can browse and review restaurants created by Admin users.</p>
          <p><a class="btn btn-default" href="wheretoeat" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/emailsystemIcon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Email System</h2>
          <p>The frontend of a email system styled after gmail, ulitizing HTML,CSS, and Bootstrap</p>
          <p><a class="btn btn-default" href="emailsystem" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/pokergameIcon.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Poker Game</h2>
          <p>A online poker game for 2-4 players using Laravel, JQuery, Javascript,Node, Socket, MySQL,HTML,CSS. Networking is done using socket.</p>
          <p><a class="btn btn-default" href="pokergame" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/quadcopter.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>FPV Racing Quadcopter</h2>
          <p>A FPV Quadcopter built to go super fast! Calculated top speeds of 100mph</p>
          <p><a class="btn btn-default" href="" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div>
       <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/syntaxerror.jpg" alt="Generic placeholder image" width="140" height="140">
          <h1>Syntax Error Robotic's 2nd 60lb Combat Robot</h1>
          <p>A 60lb Combat Robot designed using Auto Desk Inventor, Auto Desk Fusion360, Waterjet 6061 Alumnium, 3D printed Pulleys, 4 Wheel belt drive, Chromoly Vertical Disc Weapon</p>
          <p><a class="btn btn-default" href="" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/quickenrobot.jpg" alt="Generic placeholder image" width="140" height="140">
          <h1>Quicken Loans Rocket Mortgage Commercial Robot</h1>
          <p>A Robot Built for a Quicken Loan commercial featuring battlebots!</p>
          <p><a class="btn btn-default" href="" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/myWebsite/resources/views/images/antweightrobot.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Syntax Error 1lb Combat Robot</h2>
          <p>A 1lb Combat robot designed in Auto Desk Inventor, and then CNC Milled out in 6061 Alumnium</p>
          <p><a class="btn btn-default" href="" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->   
      </div>

      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
