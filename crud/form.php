<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Crud Form</title>
</head>

<body>

  <main>
    <div class="container my-5">
      <div class="card rounded p-3 w-50 mx-auto bg-light">
        <form action="action.php" method="POST">
          <input type="text" name="name" class="form-control mb-2" required placeholder="Enter Your Name">
          <input type="email" name="email" class="form-control mb-2" required placeholder="Enter Your Email">
          <input type="phone" name="phoneNumber" class="form-control mb-2" required placeholder="Enter Your Phone Number">
          <input type="text" name="address" class="form-control mb-2" required placeholder="Enter Your Address ">

          <input type="date" name="dob" class="form-control mb-2" required placeholder="Enter Date of Birth">
          <select name="gender" class="form-control mb-2">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
          <button type="submit" name="users" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>


  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>