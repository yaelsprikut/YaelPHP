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

    
    <?php include 'includes/navadmin.inc.php'; ?>
	
	
    <?php include 'includes/categoriesadmin.inc.php'; ?>
	
        <div class="span8">
		<div class="row-fluid">
            <div class="span12">
			
              
			  
			  <h3>Welcome, Admin! Home (Dashboard)</h3>
			  <p>The admin must use this page to modify the items and categories of this website. Nunc congue gravida turpis, vitae porttitor urna ultrices non. Etiam in egestas ligula. Nunc sit amet ultrices dolor, eu dignissim orci. Etiam ultricies purus nec odio rhoncus, vitae porta libero interdum. Nulla tempor porttitor tempus. Nam vitae placerat eros, et tincidunt purus. Pellentesque sit amet adipiscing sapien, a pulvinar arcu. Suspendisse aliquet ultrices neque, a eleifend diam vestibulum vitae. Sed sit amet semper sapien, vitae tristique nibh. Aenean placerat facilisis diam a varius. Suspendisse potenti. Suspendisse non faucibus ligula, at fringilla metus. Mauris metus risus, mattis ac elit eu, pulvinar tempus tortor. Duis dictum pellentesque tellus. Aliquam erat volutpat.</p>
			  <br />
			  <a href="/comp1230/assignments/assignment1/bootstrap_admin.php"><button type="submit" class="btn btn-danger">Modify Items</button></a>
			  
			  
			  <a href=""><button type="submit" class="btn btn-primary">Modify Categories</button></a>
			  <br />
			  <br />
			  <img src="./bootstrap_items_files/item_07.jpg" alt="">
              
            </div><!--/span-->
            
      
          </div><!--/row-->
          
			

      <hr>

      <?php include 'includes/footer.inc.php'; ?>