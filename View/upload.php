<?php
session_start();
if (!isset($_SESSION["userRole"])) {
  header("location: login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vizew</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Typography CSS -->
  <link rel="stylesheet" href="assets/css/typography.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- Header Style -->
  <link rel="stylesheet" href="style.css" />

  <style>
    body>div.container {
      margin-top: 100px;
    }
  </style>

</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <?php
  require_once "header.php";
  ?>
  <div class="container">
    <form class="" action="display.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="video-title">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Enter a title" required>
      </div>
      <div class="form-group">
        <label for="video-description">Description</label>
        <textarea name="description" class="form-control" id="video-description" placeholder="Enter a description" required></textarea>
      </div>
      <div class="form-group">
        <label for="thumbnail">Upload Thumbnail</label>
        <input type="file" name="thumbnail" value="" id="thumbnail" required>
      </div>
      <div class="form-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" required name="video">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="uploadbutton" name="upload" value="upload">Submit</button>
      <button type="submit" class="btn btn-danger">Cancel</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- Appear JavaScript -->
  <script src="../assets/js/jquery.appear.js"></script>
  <!-- Countdown JavaScript -->
  <script src="../assets/js/countdown.min.js"></script>
  <!-- Counterup JavaScript -->
  <script src="../assets/js/waypoints.min.js"></script>
  <script src="../assets/js/jquery.counterup.min.js"></script>
  <!-- Wow JavaScript -->
  <script src="../assets/js/wow.min.js"></script>
  <!-- Slick JavaScript -->
  <script src="../assets/js/slick.min.js"></script>
  <!-- Owl Carousel JavaScript -->
  <script src="../assets/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JavaScript -->
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Smooth Scrollbar JavaScript -->
  <script src="../assets/js/smooth-scrollbar.js"></script>
  <!-- Chart Custom JavaScript -->
  <script src="../assets/js/chart-custom.js"></script>
  <!-- Flatpickr JavaScript -->
  <script src="../assets/js/flatpickr.min.js"></script>
  <!-- Custom JavaScript -->
  <script src="../assets/js/custom.js"></script>
  <!-- ##### All Javascript Script ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>