<?php 
$pageTitle = 'ADD PRODUCTS';
require ('./include/header.php'); 
?>
    <?php
      // start by including our classes
      require_once('validate.php');
      require_once('database.php');

      // create our class objects
      $valid = new validate();
      $uploadSuccess = false; 
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        // using our escape_string function
        $date = $_POST['date'];
        $name = $_POST['name'];
        $color = $_POST['color'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $image_name = $_FILES['files']['name'][0];
        $tmp_image = $_FILES['files']['tmp_name'][0];
        $target_file = './uploads/'.$image_name;
        move_uploaded_file($tmp_image, $target_file);
      
        // using our functions found in our validate class 
        // (checkEmpty validAge validEmail)
        $msg = $valid->checkEmpty($_POST, array('date', 'name', 'color', 'category', 'brand', 'description'));
        $checkDate = $valid->validDate($_POST['date']);
        $checkColor = $valid->validColor($_POST['color']);
        $checkCategory = $valid->validCategory($_POST['category']);
        // now handle any empty fields
        if($msg != null){
          echo $msg;
          //link to the previous page
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkDate){
          echo '<p>The date must not be changed.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkColor){
          echo '<p>Please choose a valid color.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkCategory){
            echo '<p>Please choose a valid category.</p>';
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }else{
          // if all the fields are valid
          $res = $database->create_products($date, $name, $color, $category, $brand, $description, $image_name, $target_file);
          // let the user know that the record has been added
          if($res){
            echo "<p>Data added successfully.</p>";
            echo "<a href='view.php'>VIEW TABLE</a>";
          }else{
            echo "<p>Failed to insert data</p>";
          }
        }
      }

    ?>
    </main>
    <?php require ('./include/footer.php'); ?>
