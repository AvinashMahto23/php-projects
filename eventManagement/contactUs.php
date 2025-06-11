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
  <!-- Contact Us section -->

  <section class="py-4 bg-light">
    <h1 class="section-title text-center mb-4">
      Contact Us
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card text-center py-3 shadow-lg border-0">
            <i class="fa-solid fa-location-dot fs-2 pb-1 text-danger"></i>
            <h4 class="pb-3">Our location</h4>
            <p class="fs-5">Baba Path, Hazaribagh</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card text-center py-3 shadow-lg border-0">
            <i class="fa-solid fa-phone fs-2 pb-1 text-primary"></i>
            <h4 class="pb-3">Phone Number</h4>
            <p class="fs-5">+91 8345954951</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card text-center py-3 shadow-lg border-0">
            <i class="fa-solid fa-envelope fs-2 pb-1 text-success"></i>
            <h4 class="pb-3">Email</h4>
            <p class="fs-5">mahtotech23@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Form and Map -->
  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.576096656394!2d85.36088607602764!3d23.975425580099014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49b00795433f5%3A0x9e779f25534da160!2sPro%20Coding%20Hub!5e0!3m2!1sen!2sin!4v1747977616322!5m2!1sen!2sin" class="w-100" height="445" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow-lg px-2 pt-4 pb-5">
            <form action="">
              <h2 class="text-center mb-4">Write to Us</h2>
              <input type="text" class="form-control mb-4 " placeholder="Enter your name">
              <input type="email" class="form-control mb-4" placeholder="Enter your email">
              <input type="number" class="form-control mb-4" placeholder="Enter your Phone Number">
              <textarea name="" class="form-control mb-4" id=""></textarea>
              <button type="submit" class="btn btn-danger w-100">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact us end -->



  <!-- footer -->
  <?php include 'includes/footer.php'; ?>
  <!-- footer Link -->
  <?php include "includes/footerlink.php" ?>
</body>

</html>