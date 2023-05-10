<?php
session_start();
if (!isset($_SESSION["userRole"])) {
  header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Your video</title>
  <style media="screen">
    body {
      padding: 0px;
      margin: 0px;
    }

    h1 {
      background-color: teal;
      text-align: center;
      color: white;
      font-size: 48px;
      padding: 10px;
      margin-top: 0px;
    }

    ul {
      list-style-type: none;
    }

    li {
      float: left;
      margin-left: 15px;
      margin-top: 25px;
    }

    p {
      font-weight: bold;
      max-width: 380px;
      font-size: 18px;
      height: 30px;
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
  <h1>Playlist Videos</h1>
  <div class="">
    <ul>
      <?php
      include '../Controller/DBController.php';
      $db = new DBController();
      $db->openConnection();

      // Use prepared statements to prevent SQL injection
      $sql1 = "SELECT * from video";
      $stmt = mysqli_prepare($db->getConnection(), $sql1);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      while ($info = $db->select_fetch_array($result)) {
      ?>
        <li>
          <p><?php echo $info['title']; ?></p>
          <video src="video/<?php echo $info['video']; ?>" width="380px" poster="thumbnail/<?php echo $info['thumbnail']; ?>" controls>

          </video>
        </li>
      <?php
      }
      // Close the connection after the loop
      $db->closeConnection();
      ?>
    </ul>

  </div>

</body>

</html>