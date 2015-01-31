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
			
              
			  
			  <h3>Dashboard Listings: Add New Item</h3>
			     <form>
			         <label>Title:</label> <input type="text" size="10" />
					 <label>Description:</label><textarea rows="5" cols="20">Write your description here...</textarea>
					 <label>Category:</label>
					 <select>
					     <option value="">Choose One...</option>
						<option value="">DC Comics</option>
						<option value="">Marvel Comics</option>
						<option value="">Limited Edition</option>
						<option value="">Action Figures</option>
						</select>
					 <label>Price:</label><input type="text" size="10" /><br />
					 <label>Picture</label>
					 <input type="file" name="file" />
					 <br />
					 <br />
					 <p><a class="btn" href="http://twitter.github.io/bootstrap/examples/fluid.html#">Save Changes</a>
			            <a class="btn btn-primary" href="http://twitter.github.io/bootstrap/examples/fluid.html#">Cancel</a></p>
					 
				 </form>
              
            </div><!--/span-->                
          </div><!--/row-->
		 

     

      <hr />

      <?php include 'includes/footer.inc.php'; ?>