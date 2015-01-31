<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>GBC Research Monster</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
                <link rel="shortcut icon" href="images/rmfavicon.png" type="image/x-icon" />

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
            <!-- Begin Navbar -->
            <?php include 'includes/navbar.php';?>
            <!-- Begin Header -->
            <?php include 'includes/header.php';?>



<!-- Begin Body -->
<div class="container">
	<div class="no-gutter row">
            <?php include 'includes/sidebar.php';?>            
      		<!-- Mid Bar -->	
      		<?php
                
                $f = $_GET["c"];

                    switch($f){
                      case 1:
                       include 'profile/studentcont.php';
                      break;

                      case 2:
                      include 'profile/editprofile.php';
                      break;
                    }
                
                ?>
                    <!-- News Feed -->
                    <!-- right content column-->

</div>
</div>
<?php include 'includes/footer.php';?>
<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>