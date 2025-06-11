<?php
include "config.php";
if (isset($_POST['admin'])){
$name= $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$added_on = date('Y-m-d');
$updated_on = date('Y-m-d');
 
$sql = "INSERT INTO tbl_admin2(`name`,`email`,`password`,`added_on`,`updated_on`) VALUES('$name','$email','$password','$added_on','$updated_on')";

if($conn->query($sql)){
  echo "Data inserted successfully";
}
 else{
  echo "Error" . $conn->error;
 }

 header("Location:index.php");
 exit;
}

if (isset($_POST['admin_edit'])){
  $id= $_POST['id'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $updated_on = date("Y-m-d");
  $added_on = date("Y-m-d");

   $sql = "UPDATE `tbl_admin2` SET `name` = '$name', `email` = '$email', `password` = '$password' , `added_on` = '$added_on',`updated_on` = '$updated_on' WHERE id = $id";

  if($conn->query($sql)){
  echo "Data inserted successfully";
}
 else{
  echo "Error" . $conn->error;
 }
  header('Location:index.php');
  exit;
}




if (isset($_POST['del_admin'])) {
	$id = $_POST['id'];
	$query = "UPDATE `tbl_admin2` SET status ='0' WHERE id = '$id'";
	$run = mysqli_query($conn, $query);
	if ($run === true) {
		$_SESSION['msg'] = "Record Deleted Successfully !!!";
	} else {
		$_SESSION['msg'] = "Record Deletion Cancel !!!";
	}
}
?>