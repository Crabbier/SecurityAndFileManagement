
<!-- IF ADMINISTRATOR IS LOGGED IN WE SHOW THE INFORMATION -->
<?php
	require './inc/header.php';
	//check for authentication before we show any data
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header('location:signin.php');
		exit();
	}
	else {
		//connect to db
		require './inc/database.php';
		//set up query
		$sql = "SELECT * FROM phppeople";
		//run the query and store the results
		$result = $conn->query($sql);
		//start our table
		echo '<section class="person-row">';
		echo '<table class="table table-striped">
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone Number</th>
						</tr>';
		foreach ($result as $row) {
			echo '<tr>
							<td>' . $row['fname']  . '</td>
							<td>' . $row['lname']  . '</td>
							<td>' . $row['email']  . '</td>
							<td>' . $row['telNumber']  . '</td>
					</tr>';
			}
		//close the table
		echo '</table>';
		echo '<a class="btn btn-warning" href="logout.php">Logout</a>';
		echo '</section>';

		//disconnect
		$conn = null;
	}
	require './inc/footer.php';
?>
<?php
  // Include database file
  include 'database.php';
  //$customerObj = new database();
  // Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
  }
?>

<!-- EDIT - DELETE VIEW -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD With PHP</title>
    <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
    <meta name="robots" content="noindex, nofollow">
    <!--  Add our Google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!--  Add our Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--  Add our custom CSS  -->
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
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
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Salary</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
       // session_start(); 
       
        $customers = $customerObj->displayData();
        if ($customers!=null){
        foreach ($customers as $customer) {
        //  $_SESSION['valueToPass'] = $customer['id'];
          ?>
          <tr>
            <td><?php echo $customer['id'] ?></td>
            <td><?php echo $customer['name'] ?></td>
            <td><?php echo $customer['email'] ?></td>
            <td><?php echo $customer['salary'] ?></td>
            <td>
              <button class="btn btn-danger"><a href="edit.php?editId=<?php echo $customer['id'] ?>">
                  <i class="fa fa-pencil text-white" ></i></a></button>
              <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $customer['id'] ?>" onclick="return confirm('Are you sure?'); return false;">
                  <i class="fa fa-trash text-white" ></i>
                </a></button>
            </td>
          </tr>
        <?php } }?>
        </tbody>
      </table>
    </section>
</main>
</body>
</html>

