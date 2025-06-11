  <?php
  include "config.php";
  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>admin2</title>
    <?php include "includes/topLink.php" ?>
  </head>

  <body>

    <?php include "includes/nav.php" ?>

    <!-- Form and Table-->
    <section class="mt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <h1 class="text-danger text-center">Form</h1>
            <div class="card py-3 px-2">
              <form action="action.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control mb-4">

                <label for="email">Email</label>
                <input type="email" name="email" class="form-control mb-4">

                <label for="password">Password</label>
                <input type="password" name="password" class="form-control mb-4">
                <button class="btn btn-primary w-100" type="submit" name="admin">Submit</button>
              </form>
            </div>
          </div>


          <!-- Table -->
          <div class="col-md-8">
            <h1 class="text-danger text-center">Table</h1>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Added on</th>
                  <th>Updated on</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              $sql = "SELECT * FROM `tbl_admin2` WHERE `status` = '1' ";
              $res = mysqli_query($conn, $sql);
              $sn = 0;
              while ($row = mysqli_fetch_assoc($res)) {
                $sn++;
              ?>
                <tbody>
                  <td><?= $sn ?></td>
                  <td><?= $row['name'] ?></td>
                  <td><?= $row['email'] ?></td>
                  <td><?= $row['password'] ?></td>
                  <td><?= $row['added_on'] ?></td>
                  <td><?= $row['updated_on'] ?></td>
                  <td>
                    <a href="editForm.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a class="del" data-id="<?php echo $row['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a>

                  </td>
                </tbody>
              <?php } ?>
            </table>

          </div>
        </div>

      </div>
    </section>
             
    <?php include 'includes/footerlink.php' ?>

    <script>
      $(document).ready(function() {
        $("body").on("click", ".del", function() {
          var id = $(this).attr('data-id');
          if (confirm('You want to delete !!!')) {
            $.ajax({
              url: "action.php",
              type: "POST",
              data: {
                id: id,
                del_admin: 'del_admin'
              },
              success: function(data) {
                location.reload();
              }
            });
          } else {
            alert('Record Deletion Cancel!');
          }
        });
      });
    </script>


  </body>

  </html>