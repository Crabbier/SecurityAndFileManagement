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



<?php require ('./include/header.php'); ?>
<body>
  <header>
    <h1>Full CRUD With OOP | Edit</h1>
  </header>
  <section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-primary">
          <h4 class="text-white">Update Records</h4>
          </div>
          <div class="card-body bg-light">
            <form method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="uname" value="<?php echo $customer['name']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="uemail" value="<?php echo $customer['email']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" class="form-control" name="usalary" value="<?php echo $customer['salary']; ?>" required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
            <?php
            // Update Record in customer table
              if(!empty($_POST)) {
                $uname = $_POST['uname'];
                $uemail = $_POST['uemail'];
                $usalary = $_POST['usalary'];
                $id = $_POST['id'];
                $customerObj->updateRecord($uname, $uemail, $usalary, $id);
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php require ('./include/footer.php'); ?>