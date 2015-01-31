<?php
  // create short variable names
  //include '/config.inc.php'; 
  //include INCLUDE_PATH . '/util.inc.php';
  //include INCLUDE_PATH . '/function.inc.php';
  include 'includes/function.inc.php';
  $name = $_POST['name'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  $price = $_POST['price'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $date = date('H:i, jS F Y');
?>

<html>
<head>
  <title>Item creation test</title>
</head>
<body>
<h1>Item Confirmation</h1>
<h2>Item Created: </h2>

<?php
	echo "<p>Item submitted at ".date('H:i, jS F Y')."</p>";

	if (isset($name) and isset($category) and isset($description) and isset($price)) {
		echo "Title: " 				. $name 				. "<br />";
		echo "Description: " 	. $description 	. "<br />";
		echo "Category: " 		. $category 		. "<br />";
		echo "Price: " 				. $price 				. "<br />";
		$id = getID();
	  }
	  else {
	  	echo "Please fill out all required fields.";
	  }

	$outputstring =  $id . "\t" . $date . "\t" . $name . "\t" . $description . "\t" . $category . "\t" . $price . "\t" . "\n";

	uploadImage();
	// open file for appending
	$fp = fopen("$DOCUMENT_ROOT/comp1230/assignments/assignment1/group/items.txt", 'ab');

	flock($fp, LOCK_EX); // lock the file for writing

	if (!$fp) {
	  echo "<p><strong> Your item could not be created at this time.
		    	Please try again later.</strong></p></body></html>";
	  exit;
	}

	fwrite($fp, $outputstring, strlen($outputstring));
	flock($fp, LOCK_UN); // release write lock
	fclose($fp);

	echo "<p>Item successfully created. </p>";

?>
	<p>
		<a href="addnew.php">Add another item.</a>
		<br />
		<a href="items.php">View items.</a>
	</p>
</body>
</html>
