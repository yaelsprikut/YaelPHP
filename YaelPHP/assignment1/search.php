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
			
            <?php
			include INCLUDE_PATH .'/style.items.inc.php';

				$search = $_GET['search'];
				$title = $_GET['title'];
				$description = $_GET['description'];
				$picture = $_GET['picture'];
				
				$terms = explode(" ", $search, $title);
				foreach ($terms as $each) {
				 
				}				
			  
			?>  
			  
		<div class="featurette">
        <img class="featurette-image pull-right" src="./bootstrap_main_files/browser-icon-chrome.png">
        <h2 class="featurette-heading"><?php echo $search ?> <span class="muted">It will blow your mind.</span></h2>
        <p class="lead">Here at ComicBay we have a wide selection of Marvel and DC comics in mint and used condition. All your beloved comic characters are just a button click away. Browse to find the adventures of your favourite comic book heros like Batman, Spiderman, Wolverine, Thor, Ghost Rider, Catwoman, and many more!</p>
		</div>
			  
			 
              
            </div><!--/span-->
            
      
          </div><!--/row-->
          
			

      <hr>

      <?php include 'includes/footer.inc.php'; ?>