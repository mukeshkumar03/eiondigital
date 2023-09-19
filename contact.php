<!DOCTYPE html>
<html lang="en">
<?php
$title = 'EION Digital: Contact Us';
include './head.php';
?>

<body>
  <?php
  $active_link = 'Contact';
  include './header.php';
  ?>

  <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
      <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <p class="display-4 text-white animated zoomIn">
          We're here, eager to hear from you. Your questions, ideas, and feedback are invaluable to us
        </p>
      </div>
    </div>
  </div>

  <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
        <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
        <p>
          Your questions, ideas, and feedback are invaluable to us.
          Reach out, connect, and let's embark on a conversation that matters.
          Together, we build bridges of communication and turn possibilities into reality.
          We're here, eager to hear from you.
        </p>
      </div>
      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
              style="width: 60px; height: 60px;">
              <i class="fa fa-phone-alt text-white"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Call to ask any question</h5>
              <h4 class="text-primary mb-0">+91 8618180342</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
              style="width: 60px; height: 60px;">
              <i class="fa fa-envelope-open text-white"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Email to get free quote</h5>
              <h4 class="text-primary mb-0">krmukesh.nit@gmail.com</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
              style="width: 60px; height: 60px;">
              <i class="fa fa-map-marker-alt text-white"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Visit our office</h5>
              <h4 class="text-primary mb-0">C-322, Vaishno Lotus</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-5">
        <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
          <form id="contact-form">
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name"
                  style="height: 55px;">
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email"
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject"
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4"
                  placeholder="Message"></textarea>
              </div>

              <div id="contact-success" class="p-3 mb-2 bg-success text-white">
                Contact Request has been submitted successfully
              </div>

              <div id="contact-error" class="p-3 mb-2 bg-danger text-white">
                Server error occurred while sending Request. Please try again after sometime.
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
          <iframe class="position-relative rounded w-100 h-100"
            src="https://maps.google.com/maps?q=%20C-322%2C%20Vaishno%20Lotus%2C%20Chikkanayakanahalli%2C%20Sarjapura%20Road%2C%20Bengaluru%20&t=m&z=10&output=embed&iwloc=near"
            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <?php include('./footer.php') ?>
</body>

</html>