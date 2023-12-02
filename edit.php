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




<?php 
    $pageTitle = 'EDIT RECORDS';
    require ('./include/header.php'); 
    ?>
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
                <label for="color" class="col-sm-2 control-label">Color:</label>
                    <div>
                    <select name="pcolor" class="form-control" value="<?php echo $product['color']; ?>">
                    <option>Product Color</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Copper">Copper</option>
                    <option value="Blue">Blue</option>
                    <option value="Red">Red</option>
                    </select>
                    </div>
              </div>
              <div class="form-group">
                <label for="category" class="col-sm-2 control-label">Category:</label>
                <div class="col-sm-10">
                  <select name="pcategory" class="form-control" value="<?php echo $product['category']; ?>" required="">
                    <option>Product Category</option>
                    <option value="Quartz Watch">Quartz Watch</option>
                    <option value="Mechanic Watch">Mechanic Watch</option>
                    <option value="Automatic Watch">Automatic Watch</option>
                    <option value="Necklace">Necklace</option>
                    <option value="Bracelet">Bracelet</option>
                    <option value="Ring">Ring</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" name="pbrand" value="<?php echo $product['brand']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="pdesc" value="<?php echo $product['description']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>"  required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
            <?php
            // Update Record in customer table
              if(!empty($_POST)) {
                $date = $_POST['date'];
                $name = $_POST['pname'];
                $color = $_POST['pcolor'];
                $category = $_POST['pcategory'];
                $brand = $_POST['pbrand'];
                $description = $_POST['pdesc'];
                $id = $_POST['id'];
                $update = $database->update_product($date, $name, $color, $category, $brand, $description, $id);
                
                if($update) {
                    header("Location: editableView.php?msg2=update");
                    exit;
                } else {
                    echo "Registration updated failed try again!";
                }
            
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require ('./include/footer.php'); ?>
  