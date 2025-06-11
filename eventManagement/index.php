<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'includes/toplink.php'; ?>

  <title>AviEvents</title>
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

  <!-- Hero section -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/carousel/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/carousel/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/carousel/3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Hero section end -->
  <!-- Marquee -->
  <div class="container-fluid bg-dark">
    <div class="row">

      <div class="col-md-2 col-3 fs-3 bg-danger text-light text-center">Offer :</div>
      <div class="col-md-10 col-9">
        <marquee behavior="" direction="" class="fs-4 text-light ">
          Hurry! 50% discount on your first book, offer valid till 10/06/2025 |
          Book your dream event today with just one click! |
          Trusted by 10,000+ happy customers across India |
          Get free decoration on premium bookings! |
          Hurry! Limited time offers available now |
          Easy booking, hassle-free experience guaranteed |
          Celebrate your special moments with us in style!
        </marquee>
      </div>
    </div>
  </div>

  <!-- About Us -->

  <section class="about py-4 bg-light">
    <h1 class="section-title text-center pb-4">About Us</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <h3 class="card-title text-danger text-center">Avi Events</h3>
          <p class="text-align-justify">Welcome to AviEvents – your one-stop platform to explore and book the best events around you. Whether it’s a music concert, wedding, business seminar, college fest, or cultural show, we make it easy for you to find what’s happening and be a part of it.

            We’re here to simplify event booking for everyone. No more missing out – now you can see which events are happening near you and book your spot instantly through our website.

            From organisers to attendees, AviEvents bridges the gap by providing a smooth and reliable platform for event discovery, management, and booking. Your next experience is just a click away.
          </p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <img src="images/logo/1.png" class="img-fluid w-75 " alt="">
        </div>
      </div>

    </div>
  </section>
  <!-- About Us end -->

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


  <section class="blog">
    <h1 class="section-title text-center py-4">Our Blogs</h1>
    <div class="container">
      <div class="row">
        <!-- Blog Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <img src="images/events/2.jpg" class="event-img" alt="Corporate Event">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title btn btn-primary">Corporate Gala</h5>
                <h5 class="card-title text-danger">10/05/25</h5>
              </div>
              <p class="card-text"> Avi Events successfully hosted a corporate gala night in Delhi, luxurious networking environment for over 500 professionals.</p>
              <div class="d-flex justify-content-between">
                <a href="#" class="">Read More...</a>
                <div class="social-icons d-flex gap-3">
                  <a href="#" class="text-decoration-none text-primary"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-decoration-none text-danger"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-decoration-none text-dark "><i class="fab fa-x-twitter"></i></a>
                  <a href="#" class="text-decoration-none text-info"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Card 2 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <img src="images/events/1.jpg" class="event-img" alt="Wedding Celebration">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title btn btn-success">Dream Wedding</h5>
                <h5 class="card-title text-danger">18/05/25</h5>
              </div>
              <p class="card-text">From royal décor to flawless execution, Avi Events turned a destination wedding into a magical memory for the couple and guests.</p>
              <div class="d-flex justify-content-between">
                <a href="#" class="">Read More...</a>
                <div class="social-icons d-flex gap-3">
                  <a href="#" class="text-decoration-none text-primary"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-decoration-none text-danger"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-decoration-none text-dark "><i class="fab fa-x-twitter"></i></a>
                  <a href="#" class="text-decoration-none text-info"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Card 3 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <img src="images/events/3.jpg" class="event-img" alt="Product Launch">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title btn btn-info text-white">Product Launch</h5>
                <h5 class="card-title text-danger">22/05/25</h5>
              </div>
              <p class="card-text">We managed a high-end product launch in Mumbai with live music and engagement making it an unforgettable experience.</p>
              <div class="d-flex justify-content-between">
                <a href="#" class="">Read More...</a>
                <div class="social-icons d-flex gap-3">
                  <a href="#" class="text-decoration-none text-primary"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-decoration-none text-danger"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-decoration-none text-dark "><i class="fab fa-x-twitter"></i></a>
                  <a href="#" class="text-decoration-none text-info"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery section -->
  <section class="gallery my-4 bg-light">
    <h1 class="section-title text-center mb-4">Gallery</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-6 mb-4"><img src="images/gallery/1.png" class="img-fluid" alt="gallery"></div>
        <div class="col-md-4 col-6 mb-4"><img src="images/gallery/2.png" class="img-fluid" alt="gallery"></div>
        <div class="col-md-4 col-6 mb-4"><img src="images/gallery/3.png" class="img-fluid" alt="gallery"></div>
        <div class="col-md-4 col-6 mb-4"><img src="images/gallery/4.png" class="img-fluid" alt="gallery"></div>
        <div class="col-md-4 col-6 mb-4"><img src="images/gallery/5.png" class="img-fluid" alt="gallery"></div>
        <div class="col-md-4 col-6 mb-4"><img src="images/gallery/6.png" class="img-fluid" alt="gallery"></div>
      </div>
    </div>
  </section>

  <!-- Gallery section end -->

  <!-- Testimonials section-->
  <section class="testimonials py-5">
    <h1 class="section-title text-center mb-4">Testimonials</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4 pb-4">
          <div class="card p-3 border-0 shadow-lg">
            <img src="images/testimonials/1.png" alt="Avinash Mahto" class="w-50 rounded-circle mx-auto mb-3">
            <h4 class="text-center text-primary">MS Dhoni</h4>
            <p>
              "AviEvents made planning and managing my college fest smooth and stress-free. The booking system was easy, and the team was super responsive. I highly recommend AviEvents to anyone looking to organise or attend events seamlessly!"
            </p>
          </div>
        </div>
        <div class="col-md-4 pb-4">
          <div class="card p-3 border-0 shadow-lg">
            <img src="images/testimonials/2.png" alt="Avinash Mahto" class="w-50  rounded-circle mx-auto mb-3">
            <h4 class="text-center text-primary">Lionel Messi</h4>
            <p>
              "AviEvents made planning and managing my college fest smooth and stress-free. The booking system was easy, and the team was super responsive. I highly recommend AviEvents to anyone looking to organise or attend events seamlessly!"
            </p>
          </div>
        </div>
        <div class=" col-md-4 pb-4">
          <div class="card p-3 border-0 shadow-lg">
            <img src="images/testimonials/3.png" alt="Avinash Mahto" class="w-50  rounded-circle mx-auto mb-3">
            <h4 class="text-center text-primary">Elon Musk</h4>
            <p>
              "AviEvents made planning and managing my college fest smooth and stress-free. The booking system was easy, and the team was super responsive. I highly recommend AviEvents to anyone looking to organise or attend events seamlessly!"
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials section end-->

  <!-- Contact Us section -->
  <section class="contact my-4">
    <h1 class="section-title text-center mb-4">Contact Us</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.576096656394!2d85.36088607602764!3d23.975425580099014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49b00795433f5%3A0x9e779f25534da160!2sPro%20Coding%20Hub!5e0!3m2!1sen!2sin!4v1747977616322!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card shadow border-0 px-2 pt-4 pb-5">
            <form action="">
              <h1 class="text-center mb-4">Write to Us</h1>
              <input type="text" class="form-control mb-4" placeholder="Enter your name">
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

  <!-- footer link -->
  <?php include 'includes/footerlink.php'; ?>


</body>

</html>