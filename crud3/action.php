<?php
include "config.php";

if (isset($_POST['student'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $added_on = date('Y-m-d');
  $updated_on = date('Y-m-d');

  // Insert query
  $sql = "INSERT INTO tbl_student(`name`,`email`,`added_on`,`updated_on`) VALUES('$name','$email','$added_on','$updated_on')";

  if ($conn->query($sql) === TRUE) {
    echo "User inserted successfully!";
  } else {
    echo "Error: " . $conn->error;
  }

  header("Location: table.php");
  exit;
}
