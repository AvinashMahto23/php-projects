<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'includes/toplink.php'; ?>
  <title>Venue Booking</title>
</head>

<body>
  <!-- Top Header -->
  <?php include 'includes/topheader.php'; ?>
  <!-- Header section -->
  <section>
    <img src="images/header/1.png" class="img-fluid w-100" alt="">
  </section>
  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Book Now -->
  <section class="book-now">
    <h1 class="section-title text-center my-4">
      Book Now
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow-lg">
            <div class="card-header text-center fs-4 text-white bg-danger">Concert</div>
            <img src="images/events/2.jpg" alt="Concert Image" class="img-fluid">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="card-title text-success">Rs. 5000</h5>
                <h5 class="card-title text-danger">12/05/25</h5>
              </div>
              <div class="card-footer">
                <table class="table  table-striped table-hover ">
                  <tr>
                    <td class="fw-bold">LOCATION</td>
                    <td>Jawaharlal Nehru Stadium</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">TIME</td>
                    <td>6:00 PM - 10:00 PM</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">PERFORMER</td>
                    <td>Arijit Singh</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">ENTRY</td>
                    <td>Pass Required</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">AGE LIMIT</td>
                    <td>16+ only</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">FACILITIES</td>
                    <td>Food, Parking Security</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <form action="" class="shadow-lg p-5 mb-5 rounded border border-1">
            <div class="mb-4">
              <label for="" class="form-label fs-5">Full Name</label>
              <input type="text" class="form-control" placeholder="Enter You Name">
            </div>
            <div class="mb-4">
              <label for="" class="form-label fs-5">Email</label>
              <input type="email" class="form-control" placeholder="Enter You Email">
            </div>
            <div class="mb-4">
              <label for="" class="form-label fs-5">Phone Number</label>
              <input type="number" class="form-control" placeholder="Enter You Number">
            </div>
            <div class="mb-4">
              <label for="" class="form-label fs-5">Address</label>
              <input type="text" class="form-control" placeholder="Enter You Address">
            </div>
            <div class="mb-4">
              <label for="" class="form-label fs-5">Package</label>
              <input type="text" class="form-control" placeholder="Selected Package">
            </div>
            <div class="mb-4">
              <label for="" class="form-label fs-5">Special Request</label>
              <input type="text" class="form-control" placeholder="Write special request">
            </div>
            <button class="btn btn-primary w-100">Book Now</button>
          </form>
        </div>
      </div>
    </div>
  </section>






  <!-- Book Now End -->

  <!-- footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- footer Link -->
  <?php include "includes/footerlink.php" ?>
</body>

</html>