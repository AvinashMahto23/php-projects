<?php 
$host= "localhost";
$user= "root";
$password= "";
$database= "db_student";

// create connection object
$conn = new mysqli($host, $user, $password, $database);

// check connection
if($conn->connect_error){
  die("Connect failed:" . $conn->connect_error);
}

?>