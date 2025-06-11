<?php
include "config.php";

if (isset($_POST['student'])) {
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';

  $name = $_POST['name'];
  $class = $_POST['class'];
  $section = $_POST['section'];
  $rollNumber = $_POST['rollNumber'];
  $added_on = date('Y-m-d');
  $updated_on = date('Y,m,d');


  // insert query

  $sql = "INSERT INTO tbl_students(name,class,section,rollNumber,added_on,updated_on) VALUES('$name', '$class','$section','$rollNumber','$added_on','updated_on')";
  if ($conn->query($sql) === TRUE) {
    echo "user inserted successfully";
  } else {
    "error: " . $conn->error;
  }
  header("Location: table.php");
  exit;
}
