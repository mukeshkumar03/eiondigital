<!DOCTYPE html>
<html lang="en">

<?php
$title = 'EION Digital: Request a Quote';
include './head.php';
?>

<body>
  <?php
  $active_link = '';
  include './header.php';
  ?>

  <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
      <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <p class="display-4 text-white animated zoomIn">Want free quote? Just contact us.</p>
      </div>
    </div>
  </div>

  <?php include('./widgets/quote.php') ?>

  <?php include('./footer.php') ?>
</body>

</html>