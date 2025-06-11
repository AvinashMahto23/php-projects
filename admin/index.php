  <?php
  include "config.php";
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <?php include "includes/topLink.php" ?>
  </head>

  <body>
    <?php include "includes/nav.php" ?>

    <section class="mt-5">
      <h1 class="text-danger text-center mb-3">Table</h1>
      <div class="container">
        <div class="card p-3 w-50 mx-auto">
          <form action="action.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control mb-3">

            <label for="email">Email</label>
            <input type="email" name="email" class="form-control mb-3">

            <label for="password">Password</label>
            <input type="password" name="password" class="form-control mb-3">

            <button type="submit" name="admin" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Table -->
    <section class="mt-5 ">
      <h1 class="text-center text-danger">Table</h1>
      <div class="container">
        <table class="table table-bordered  w-75 mx-auto ">
          <thead>
            <tr>
              <th>ID</I></th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Added On</th>
              <th>Updated On</th>
              <th>Action button</th>
            </tr>
          </thead>
          <?php
          $sql = "SELECT * FROM `tbl_admin` WHERE `status` = '1'";
          $res = mysqli_query($conn, $sql);
          $sn = 0;
          while ($row = mysqli_fetch_assoc($res)) {
            $sn++;
          ?>
            <tbody>
              <tr>
                <td><?= $sn ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><?= $row['added_on'] ?></td>
                <td><?= $row['updated_on'] ?></td>
                <td>
                  <a href="editForm.php?id=<?php echo $row['id']; ?>">
                    Edit <i class="fa-solid fa-pen-to-square"></i>
                  </a>

                </td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>
    </section>



    <?php include "includes/footer.php" ?>
    <?php include "includes/footerLink.php" ?>
  </body>

  </html>