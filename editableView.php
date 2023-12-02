
<!-- IF ADMINISTRATOR IS LOGGED IN WE SHOW THE INFORMATION -->
<?php
	// require './include/header.php';
	//check for authentication before we show any data
  // ///////////////////////////////////////////////////////////////////
	// session_start();
	// if (!isset($_SESSION['user_id'])) {
	// 	header('location:signin.php');
	// 	exit();
	// }
	// else {
    
	// }
	// require './include/footer.php';
?>
<?php
  // Include database file
  require_once('database.php');
	$res = $database->read_products();
  // Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $database->delete_product($deleteId);
  }
?>

<!-- EDIT - DELETE VIEW -->

<?php require ('./include/header.php'); ?>
  <header>
    <h1>Full CRUD With OOP</h1>
  </header>
  <main class="container">
    <?php
      if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
      }
      if (isset($_GET['msg2']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
      }
      if (isset($_GET['msg3']) == "delete") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";
      }
    ?>
    <section>
      <h2>View Records
      <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
      </h2>
      <table class="table table-hover table-dark table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Watch Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Registration Date</th>
          </tr>
        </thead>
        <tbody>
        <?php
       // session_start(); 
       
        $products = $database->read_products();
        if ($products!=null){
        foreach ($products as $product) {
        //  $_SESSION['valueToPass'] = $customer['id'];
          ?>
          <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name'], " ", $product['color']; ?></td>
            <td><?php echo $product['category'] ?></td>
            <td><?php echo $product['brand'] ?></td>
            <td><?php echo $product['description'] ?></td>
            <td><?php echo $product['date'] ?></td>
            <td>
              <button class="btn btn-danger"><a href="edit.php?editId=<?php echo $product['id'] ?>">
                  <i class="fa fa-pencil text-white" ></i></a></button>
              <button class="btn btn-danger"><a href="editableView.php?deleteId=<?php echo $product['id'] ?>" onclick="return confirm('Are you sure?'); return false;">
                  <i class="fa fa-trash text-white" ></i></a></button>
            </td>
          </tr>
        <?php } }?>
        </tbody>
      </table>
    </section>
</main>
<?php require ('./include/footer.php'); ?>

