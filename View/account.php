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
    body>div.wrapper>div {
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
  <!-- Wrapper Start -->
  <div class="wrapper">

    <?php require_once("header.php") ?>

    <!-- Page Content  -->
    <div class="container">
      <div class="col-lg-6">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Account Setting</h4>
            </div>
          </div>
          <div class="iq-card-body">
            <div class="acc-edit">
              <form>
                <div class="form-group">
                  <label for="uname">User Name:</label>
                  <input type="text" class="form-control" id="uname">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="altemail">Alternate Email:</label>
                  <input type="email" class="form-control" id="altemail">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn iq-bg-danger">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Wrapper END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="assets/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Slick JavaScript -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="assets/js/smooth-scrollbar.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="assets/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/custom.js"></script>
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

</html>