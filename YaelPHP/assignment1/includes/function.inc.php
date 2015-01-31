<?php

  // /*
  // function name()
  // {
      
  // }
  //  */
  //  function _error()
  //  {
  //      echo "there was an error";
  //  }
  //  _error();
   
  //  function _msg($msg)
  //  {
  //      echo $msg;
  //  }
   
  //  _msg("Wrong Userid/Password");
   
  //  function _return($msg='Maziar')
  //  {
  //      return "<h1>$msg</h1>";
  //  }
   
  //  echo _return("h1 tag message");
  //  //echo _return();
   
  //  function num1()
  //  {
  //      return 10;
  //  }

  //  function num2()
  //  {
  //      return 20 + num1();
  //  }
   
  //  function sum($n1,$n2=100)
  //  {
  //      $total = 0;
  //      $total = $n1 + $n2;
  //      return $total;
  //  }
   
  //  sum(50);
  //  sum(num1(),num2());
   
  //  if(num1())
  //  {
       
  //  }



  // Display 9 random items on the main categories page. Modify for each category.
  function displayItem() {
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $items = file("$DOCUMENT_ROOT/comp1230/assignments/assignment1/group/items.txt");
  $number_of_items = count($items);

  if ($number_of_items == 0) {
    echo "<p><strong>No items in database. Please try again later.</strong></p>";
  }

  shuffle($items);

  for ($i = 0; $i < 9; $i++) {
    $line = explode("\t", $items[$i]);
    if ($i == 0 || $i % 3 == 0) 
    {
      echo '<div class="row-fluid">';
      echo '<div class="span4">';
      echo '<img src="img/' . 'item' . $line[0] . '.jpg" height="30px">';
      echo '<h2>' . $line[2] . '</h2>';
      echo '<p>'  . $line[3] . '</p>';
      echo '<p>'  . $line[4] . '</p>';
      echo '<p>'  . $line[5] . '</p>';
      echo '<p><a class="btn" href="index.php">View details »</a></p>';
      echo '</div>';
    }
    else 
    {
      echo '<div class="span4">';
      echo '<img src="img/' . 'item' . $line[0] . '.jpg" height="30px">';
      echo '<h2>' . $line[2] . '</h2>';
      echo '<p>'  . $line[3] . '</p>';
      echo '<p>Publisher: '  . $line[4] . '</p>';
      echo '<p>'  . $line[5] . '</p>';
      echo '<p><a class="btn" href="index.php">View details »</a></p>';
      echo '</div>';
      if ($i == 2 || $i == 5 || $i == 8)
        echo '</div>';
      }
    }
  }

  // Function to display items from selected category only
  function displayItemPerCat($category) {

  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $items = file("$DOCUMENT_ROOT/comp1230/assignments/assignment1/group/items.txt");
  $number_of_items = count($items);
  $catitems = array();
  
  for ($i = 0; $i <= $number_of_items; $i++) 
  {
    $line = explode("\t", $items[$i]);
    if (strpos($items[$i], $category))
    {
      echo '<div class="row-fluid">';
      echo '<div class="span3">';
      echo '<img src="img/' . 'item' . $line[0] . '.jpg" width="300">';
      echo '</div>';
      echo '<div class="span6">';
      echo '<h2>' . $line[2] . '</h2>';
      echo '<p>'  . $line[3] . '</p>';
      echo '<p>Publisher: '  . $line[4] . '</p>';
      echo '<p>'  . $line[5] . '</p>';
      echo '<p><a class="btn" href="index.php">View details »</a></p>';
      echo '</div>';
      echo '</div>';      
    } 
    echo '<br />';   
  }
}

  // Function to generate a unique ID per item upon creation
  function getID()
  {
  $file_name = 'ids';
  if (!file_exists($file_name))
  {
    touch($file_name);
    $handle = fopen($file_name, 'r+');
    $id = 0;
  }
  else 
  {
    $handle = fopen($file_name, 'r+');
    $id = fread($handle, filesize($file_name));
    settype ($id, "integer");
  }
  rewind($handle);
  fwrite($handle, ++$id);

  fclose($handle);

  print $id;
  return $id;
  }

  // Function to upload image files
  // Modified version of the function from: http://www.w3schools.com/php/php_file_upload.asp
  function uploadImage() {
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 900000)
    && in_array($extension, $allowedExts))
      {
      if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
      else
        {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: "   . $_FILES["file"]["type"] . "<br>";
        echo "Size: "   . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        $fileName = $_FILES["file"]["name"];
        $splitName = explode(".", $fileName);
        $fileExt = end($splitName);
        $file_name = 'ids';
        $handle = fopen($file_name, 'r+');
        $id = fread($handle, filesize($file_name));

        $newFileName = strtolower("item" . $id . '.' . $fileExt);
        move_uploaded_file($_FILES["file"]["tmp_name"],
            "img/" . $newFileName);

        echo "Stored in: " . "img/" . $newFileName;
      }
    }
}


?>
