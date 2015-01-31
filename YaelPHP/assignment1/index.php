<?php
	session_start();
	if (isset($_SESSION ['admin']))
		{
		
		}
?>
<!DOCTYPE html>
<!-- saved from url=(0057)http://twitter.github.io/bootstrap/examples/carousel.html -->
<html lang="en"><head>
<?php include 'includes/style.home.inc.php'; ?></head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="">ComicBay</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
			<form class="navbar-form pull-right" action="login.php" method="POST">
              <input class="span2" name="username" type="text" placeholder="Email">
              <input class="span2" name="password" type="password" placeholder="Password">
              <button type="submit" class="btn" value="login">Sign In</a></button>
            </form>
              <ul class="nav">
                <li class="active"><a href="/comp1230/assignments/assignment1/bootstrap_main.php">Home</a></li>
                <li><a href="/comp1230/assignments/assignment1/bootstrap_items.php">Items</a></li>
                <li><a href="/comp1230/assignments/assignment1/bootstrap_search.php">Search</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="http://twitter.github.io/bootstrap/examples/carousel.html#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
			      
                  <ul class="dropdown-menu">
                    <li><a href="/comp1230/assignments/assignment1/bootstrap_new_this_week.php">DC Comics</a></li>
					<li><a href="/comp1230/assignments/assignment1/bootstrap_marvel.php">Marvel Comics</a></li>
                    <li><a href="">Limited Edition</a></li>
                    <li><a href="">Action Figures</a></li>
					
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item">
          <img src="./bootstrap_main_files/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to ComicBay</h1>
              <p class="lead">Your #1 destination for all the DC, Marvel, and other superhero comics you can find!</p>
              <a class="btn btn-large btn-primary" href="/comp1230/assignments/assignment1/bootstrap_items.php">View Items</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./bootstrap_main_files/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Featured This Week:</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="http://twitter.github.io/bootstrap/examples/carousel.html#">Browse Gallery</a>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="./bootstrap_main_files/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Check out our Marvel Comics:</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="/comp1230/assignments/assignment1/bootstrap_marvel.php">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://twitter.github.io/bootstrap/examples/carousel.html#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="http://twitter.github.io/bootstrap/examples/carousel.html#myCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img src="./bootstrap_main_files/picture-01.jpg" alt="">
          <h4>THE AVENGERS - Captain America Lives Again: mint condition</h4>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/carousel.html#">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="./bootstrap_main_files/picture-02.jpg" alt="">
          <h4>THE MIGHTY THOR - VAL $133 Marvel Comics: New with cover</h4>
          <p>The Mighty Thor # 272, 1978, Art by Buscema, " The Day The Thunder Failed!". This comic has a few light scuffs, with a very very slight roll. The staples are tight, with vibrant colors inside and out with supple white pages. I've been grading and collecting comics for over 50 yrs. These comics are from my vast private archives, now being offered up for sale. Watch for more of my listings.</p>
          <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/carousel.html#">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="./bootstrap_main_files/picture-03.jpg" alt="">
          <h4>Uncanny X-MEN #254 (Vol 1: Early Dec 1989) A New Legend is Born!</h4>
          <p>Uncanny X-Men # 254, Dec 1989, Forge leads and a New Legend is Born, 8.5-9.5.  These X-Men books from # 208 to # 308 have never been read, never opened, never handled except to place into the bag. This is a great books from the Bronze Age of comics. What you see is what you will get.  Please sign up for my newsletters to keep up with new additions to my site.  Please check the pictures carefully. Thanks for looking.  </p>
          <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/carousel.html#">View details »</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="./bootstrap_main_files/browser-icon-chrome.png">
        <h2 class="featurette-heading">Browse. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Here at ComicBay we have a wide selection of Marvel and DC comics in mint and used condition. All your beloved comic characters are just a button click away. Browse to find the adventures of your favourite comic book heros like Batman, Spiderman, Wolverine, Thor, Ghost Rider, Catwoman, and many more!</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="./bootstrap_main_files/browser-icon-firefox.png">
        <h2 class="featurette-heading">Shop and Exchange. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="./bootstrap_main_files/browser-icon-safari.png">
        <h2 class="featurette-heading">Discover. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php include 'includes/footer.inc.php'; ?>