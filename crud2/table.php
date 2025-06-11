<?php
include "config.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>SN</th>
          <th>Name</th>
          <th>Class</th>
          <th>Section</th>
          <th>Roll Number</th>
          <th>Added_on</th>
          <th>Updated_on</th>
        </tr>
      </thead>

      <?php
      $sql = "SELECT * FROM `tbl_students` WHERE status = 1";
      $res = mysqli_query($conn, $sql);
      $sn = 0;
      while ($row = mysqli_fetch_assoc($res)) {

        $sn++;
      ?>
        <tbody>
          <tr>
            <td><?= $sn ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['class'] ?></td>
            <td><?= $row['section'] ?></td>
            <td> <?= $row['rollNumber'] ?></td>
            <td><?= $row['added_on'] ?></td>
            <td><?= $row['updated_on'] ?></td>

          </tr>
        </tbody>
      <?php } ?>
    </table>

  </div>
</body>

</html>