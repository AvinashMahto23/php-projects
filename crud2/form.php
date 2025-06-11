<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container pt-5">
    <div class="card w-50 mx-auto bg-light text-primary px-5 py-4">
      <form action="action.php" method="POST">
        <input class="form-control mb-3" type="text" name="name" placeholder="Enter Your name">
        <input class="form-control mb-3" type="number" name="class" placeholder="Enter Your class">
        <input class="form-control mb-3" type="text" name="section" placeholder="Enter Your Section">
        <input class="form-control mb-3" type="number" name="rollNumber" placeholder="Enter Your Roll Number">
        <button class="btn btn-primary w-100" type="submit" name="student">Submit</button>
      </form>
    </div>
  </div>




</body>

</html>