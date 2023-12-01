<?php
  // To save some time we are going to create a class to hold the database connection information.
  // As mentioned in the PDF we will define our class using the class keyword followed by the name of our class.
  class Database{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "watches";
    public  $con;
    // A private keyword, as the name suggests is the one that can only be accessed from within the class in which it is defined. All the keywords are by default under the public category unless they are specified as private or protected.
    private $connection;
    function __construct(){
      // In PHP, $this keyword references the current object of the class. The $this keyword allows you to access the properties and methods of the current object within the class using the object operator
      $this->connect_db();
    }
    //I add something to the file
    // The public access modifier allows you to access properties and methods from both inside and outside of the class.
    public function connect_db(){
      $this->connection = mysqli_connect($this->servername, $this->username,$this->password,$this->database);
     
      if(mysqli_connect_error()){
       die("Database Connection Failed" . mysqli_connect_error());
      }
    }

    public function create_products($date,$name,$color,$category, $brand, $description){
        $sql = "INSERT INTO products (date, name, color, category, brand, description) VALUES ('$date', '$name', '$color', '$category', '$brand', '$description')";
        $res = mysqli_query($this->connection, $sql);
        if($res){
          return true;
        }
        else{
          return false;
        }
    }

    public function read_products(){
        $sql = "SELECT * FROM products";
         $res = mysqli_query($this->connection, $sql);
         return $res;
    }

    // THIS IS THE NEW SECTION
                 // displayRecordById
    public function display_products_by_id($id)
    {
      $query = "SELECT * FROM products WHERE id = '$id'";
      $result = $this->con->query($query);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
      }else{
        echo "Record not found";
      }
    }
               // updateRecord
  public function update_product($date, $name, $color, $category, $brand, $description, $id)
  {
      $query = "UPDATE products SET date = '$date', name = '$name', color = '$color', category = '$category', brand = '$brand', description = '$description' WHERE id = '$id'";
      $sql = $this->con->query($query);
      if ($sql==true) {
        header("Location:index.php?msg2=update");
      }else{
        echo "Registration updated failed try again!";
      }
    
  }
               // deleteRecord
  public function delete_product($id)
  {
    $query = "DELETE FROM products WHERE id = '$id'";
    $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:index.php?msg3=delete");
    }else{
      echo "Record does not delete try again";
    }
  }

  }
  $database = new Database();
?>
