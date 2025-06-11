<?php
include "config.php";

// Create
if (isset($_POST['users'])) {

  // echo '<pre>';
  // print_r($_POST);
  // die;


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $added_on = date('Y-m-d');
  $updated_on = date('Y-m-d');

  // Insert query
  $sql = "INSERT INTO tbl_users (`name`,`email`,`phoneNumber`,`address`,`dob`,`gender`,`added_on`,`updated_on`) VALUES ('$name', '$email','$phoneNumber','$address','$dob','$gender','$added_on','$updated_on')";

  // echo '<pre>';
  // print_r($sql);
  // die;

  if ($conn->query($sql) === TRUE) {
    echo "User inserted successfully!";
  } else {
    echo "Error: " . $conn->error;
  }

  header("Location: table.php");
  exit;
}
