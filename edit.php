<?php

// Include database file
include 'database.php';

//$customerObj = new database();

// session_start(); // Start the session
// if(isset($_SESSION['valueToPass'])){
//     $value = $_SESSION['valueToPass']; // Retrieve the value from the session
//     $customer = $customerObj->displayRecordById($value);
// }
//Edit customer record
if(!empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $customer = $customerObj->displayRecordById($editId);
}
?>



<?php

// Include database file
include 'database.php';

//$customerObj = new database();

// session_start(); // Start the session
// if(isset($_SESSION['valueToPass'])){
//     $value = $_SESSION['valueToPass']; // Retrieve the value from the session
//     $customer = $customerObj->displayRecordById($value);
// }
//Edit customer record
if(!empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $product = $database->display_products_by_id($editId);
}
?>




<?php require ('./include/header.php'); ?>
  <section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-primary">
          <h4 class="text-white">Update Products</h4>
          </div>
          <div class="card-body bg-light">
            <form method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="pname" value="<?php echo $product['name']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Color:</label>
                <input type="email" class="form-control" name="pcolor" value="<?php echo $customer['email']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="salary">Category:</label>
                <input type="text" class="form-control" name="pcategory" value="<?php echo $customer['salary']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="name">Brand:</label>
                <input type="text" class="form-control" name="pbrand" value="<?php echo $product['name']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Description:</label>
                <input type="email" class="form-control" name="pdesc" value="<?php echo $customer['email']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="salary">Date:</label>
                <input type="text" class="form-control" name="update" value="<?php echo $customer['salary']; ?>" required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
            <?php
            // Update Record in customer table
              if(!empty($_POST)) {
                $date = $_POST['update'];
                $name = $_POST['pname'];
                $color = $_POST['pcolor'];
                $category = $_POST['pcategory'];
                $brand = $_POST['pbrand'];
                $description = $_POST['pdesc'];
                $id = $_POST['id'];
                $database->update_product($date, $name, $color, $category, $brand, $description, $id);
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require ('./include/header.php'); ?>
  