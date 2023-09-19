<!DOCTYPE html>
<html lang="en">

<?php
$title = 'EION Digital: About Us';
include './head.php';
?>

<body>
  <?php
  $active_link = 'About';
  include './header.php';
  ?>

  <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
      <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <p class="display-4 text-white animated zoomIn">
          Driven by innovation and guided by excellence, we are more than a company; we are a collective of passionate
          minds dedicated to creating meaningful solutions. Welcome to the heart of who we are.
        </p>
      </div>
    </div>
  </div>

  <!-- About Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
            <h1 class="mb-0">The Best IT Solution</h1>
          </div>
          <p class="mb-4">
            EION Digital is an IT services and business solutions company.
            We believe innovation and collective knowledge can transform all our futures with greater purpose.
            We Develops, markets and supports software for digital transformation to increase business resilience,
            improve operational efficiency and deepen client engagement.</p>
          <div class="row g-0 mb-3">
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
              <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
              <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
            </div>
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
              <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
              <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
              style="width: 60px; height: 60px;">
              <i class="fa fa-phone-alt text-white"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Call to ask any question</h5>
              <h4 class="text-primary mb-0">+91 8618180342</h4>
            </div>
          </div>
          <a href="quote" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A
            Quote</a>
        </div>
        <div class="col-lg-5" style="min-height: 500px;">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg"
              style="object-fit: cover;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Service Start -->
  <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
        <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
          <div
            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fa fa-code text-white"></i>
            </div>
            <h4 class="mb-3">Web Development</h4>
            <p class="m-0">In Web development we're offering the services of WordPress, PHP and Laravel.</p>
            <a class="text-uppercase mt-2" href="web">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
          <div
            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fab fa-android text-white"></i>
            </div>
            <h4 class="mb-3">Apps Development</h4>
            <p class="m-0">We have expert professionals to create the Native and Hybrid mobile applications.</p>
            <a class="text-uppercase mt-2" href="app">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
          <div
            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fa fa-search text-white"></i>
            </div>
            <h4 class="mb-3">Digital Marketing</h4>
            <p class="m-0">We're helping our customer to increase there business through digital marketing via SEO and
              SMO.</p>
            <a class="text-uppercase mt-2" href="seo">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <?php include('./widgets/clients.php') ?>


  <?php include('./footer.php') ?>
</body>

</html>