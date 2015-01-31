<?php
	session_start();
	if (isset($_SESSION ['admin']))
		{
		
		}
?>
<!DOCTYPE html>
<!-- saved from url=(0054)http://twitter.github.io/bootstrap/examples/fluid.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>ComicBay - Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a page that display all items for Comic Bay.">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="\comp1230\assignments\assignment1\bootstrap_css.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://twitter.github.io/bootstrap/assets/ico/favicon.png">
  <style type="text/css"></style></head>

  <body>

    <?php include 'includes/style.nav.inc.php'; ?>

    <?php include 'includes/categories.inc.php'; ?>
	
        <div class="span8">
		<div class="row-fluid">
            <div class="span12">
			
              
			  <img src="./bootstrap_items_files/item_04.jpg" width="940" height="500" alt="">
			  <h3>Top Picks for This Week</h3>
              
            </div><!--/span-->
            
      
          </div><!--/row-->
          <hr />
			<div class="row-fluid">
            <div class="span4">
			<img src="./bootstrap_items_files/item_01.jpg" width="200" height="300" alt="">
              <h2>Item 1</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
			<img src="./bootstrap_items_files/item_02.jpg" width="200" height="300" alt="">
              <h2>Item 2</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
			<img src="./bootstrap_items_files/item_03.jpg" width="200" height="300" alt="">
              <h2>Item 3</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
		  <hr />
          <div class="row-fluid">
            <div class="span4">
			<img src="./bootstrap_main_files/picture-02.jpg" width="200" height="300" alt="">
              <h2>Item 4</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
			<img src="./bootstrap_main_files/picture-03.jpg" width="200" height="300" alt="">
              <h2>Item 5</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
			<img src="./bootstrap_main_files/picture-01.jpg" width="200" height="300" alt="">
              <h2>Item 6</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <?php include 'includes/footer.inc.php'; ?>