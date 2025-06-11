<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'includes/toplink.php'; ?>
  <title>Contact Us</title>
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

<!-- Event Book -->
  <!-- Event Book -->
  <section class="event my-4">
    <div class="container">
      <h1 class="my-4 text-center section-title">Book Events</h1>
      <div class="row">
        <!-- event card1 -->
        <div class="col-md-6  col-lg-3 mb-4">
          <div class="card shadow-lg">
            <img src="images/events/1.jpg" class="event-img" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title text-success">Rs.5000</h5>
                <h5 class="card-title text-danger">10/05/25</h5>
              </div>
              <p class="card-text">Some quick example text to build on the card .title and make up the bulk of the card's content</p>
              <a href="bookNow.php" class="btn btn-primary d-block">Book Now</a>
            </div>
          </div>
        </div>
        <!-- event card 2 -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card shadow-lg">
            <img src="images/events/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title text-success"> Rs.5000</h5>
                <h5 class="card-title text-danger">25/05/25</h5>
              </div>
              <p class="card-text">Some quick example text to build on the card .title and make up the bulk of the card's content</p>
              <a href="bookNow.php" class="btn btn-primary d-block">Book Now</a>
            </div>
          </div>
        </div>
        <!-- event card 3 -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card shadow-lg">
            <img src="images/events/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card- text-success">Rs.4000</h5>
                <h5 class="card-title text-danger">15/05/25</h5>
              </div>
              <p class="card-text">Some quick example text to build on the card .title and make up the bulk of the card's content</p>
              <a href="bookNow.php" class="btn btn-primary d-block">Book Now</a>
            </div>
          </div>
        </div>
        <!-- event card 4 -->
        <div class="col-md-6 col-lg-3 mb-4 ">
          <div class="card shadow-lg">
            <img src="images/events/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title text-success">Rs.5000</h5>
                <h5 class="card-title text-danger">12/05/25</h5>
              </div>
              <p class="card-text">Some quick example text to build on the card .title and make up the bulk of the card's content</p>
              <a href="bookNow.php" class="btn btn-primary d-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Event Book end -->
  <!-- Event Book end -->
  
   <!-- footer -->
    <?php include 'includes/footer.php'; ?>
      <!-- footer Link -->
   <?php include "includes/footerlink.php"?>
</body>
</html>