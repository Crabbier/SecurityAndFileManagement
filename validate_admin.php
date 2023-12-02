<?php
//store the user inputs in variables and hash the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

//connect to db
require 'database.php';

//set up and run the query
$res = $database->validate_admin($username, $password);
$connection = null;
?>