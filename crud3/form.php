<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container pt-5">
    <div class="card w-50 mx-auto p-4">
      <form action="action.php" method="post">
        <input type="text" name="name" class="form-control mb-2" placeholder="Enter your name">
        <input type="email" name="email" class="form-control mb-2" placeholder="Enter your email">
        <button type="submit" name="student" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>