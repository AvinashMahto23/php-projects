<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container py-5">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Dob</th>
        <th>Gender</th>
        <th>Added On</th>
        <th>Updated On</th>
      </tr>
      <?php
      $sql = "SELECT * FROM `tbl_users` WHERE status = 1";
      // echo $sql;
      $res = mysqli_query($conn, $sql);
      $sn = 0;
      while ($row = mysqli_fetch_assoc($res)) {
        $sn++;
        // echo '<pre>';
        // print_r($row);
      ?>
        <tr>
          <td><?= $sn ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['phoneNumber'] ?></td>
          <td><?= $row['address'] ?></td>
          <td><?= $row['dob'] ?></td>
          <td><?= $row['gender'] ?></td>
          <td><?= $row['added_on'] ?></td>
          <td><?= $row['updated_on'] ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>

</body>

</html>