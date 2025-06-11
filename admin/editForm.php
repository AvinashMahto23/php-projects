<?php
include "config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM `tbl_admin` WHERE `id` = $id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
// echo '<pre>';
// print_r($row);die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Form</title>
  <?php include "includes/topLink.php"; ?>
</head>

<body>
  <section class="mt-3 mb-5 pb-5">
    <h1 class="text-danger text-center mb-3">Form</h1>
    <div class="container pb-4">
      <div class="card p-3 w-50 mx-auto">
        <form action="action.php" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control mb-3">
          <input type="hidden" name="id" value="<?= $row['id'] ?>" class="form-control mb-3">

          <label for="email">Email</label>
          <input type="email" name="email" value="<?= $row['email'] ?>" class="form-control mb-3">

          <label for="password">Password</label>
          <input type="text" name="password" value="<?= $row['password'] ?>" class="form-control mb-3">

          <button type="submit" name="admin_edit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </section>
  <?php include "includes/footer.php" ?>
  <?php include "includes/footerLink.php" ?>
</body>

</html>