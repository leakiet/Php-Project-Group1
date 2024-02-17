<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
// echo  $userid;
if (isset($_SESSION['userid'])) {
  $userid = $_SESSION['userid'];

  // echo $id;
  $conn = mysqli_connect('localhost', 'root', '', 'projectmini');
  if (!$conn) {
    die("Connection Failed!");
  }
  $query = "select * from user where userid = '$userid' ";
  $result = mysqli_query($conn, $query);
  if ($result == null) {
    die('error');
  } else {
    $profile = mysqli_fetch_array($result);
  }
  mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./header.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    <?php
    include_once 'drop-down-profile.js';
    ?>
  </script>
  <title>Header</title>
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="../../../DemoPHP/Php-Project-Group1/home.php" class="d-inline-flex link-body-emphasis text-decoration-none">
          <i class="bi bi-house-fill" style="font-size:30px; color:blue"></i>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../product.php" class="nav-link px-2">Products</a></li>
        <li><a href="http://localhost/DemoPHP/Php-Project-Group1/AboutUs/about-us.php" class="nav-link px-2">About Us</a></li>
        <li><a href="../support.php" class="nav-link px-2">Support</a></li>
        <li><a href="../cart.php" class="nav-link px-2">Your Cart</a></li>
      </ul>




      <!-- đây là phần account -->
      <?php
      if (isset(($_SESSION['userid']))) {
      ?>
        <div class="w3-dropdown">
          <!-- <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/10/avatar-trang-4.jpg" alt="" onclick="myFunction()" width="50px" height="50px" style="border-radius: 50%;"> -->
          <img src="../../../DemoPHP/Php-Project-Group1/Profile/<?= $profile['image'] ?>" alt="Profile Picture" onclick="myFunction()" width="50px" height="50px" style="border-radius: 7px;">
          <div id="drop-down-logout" class="w3-dropdown-content w3-bar-block w3-border">
            <a href="http://localhost/DemoPHP/Php-Project-Group1/Profile/profile.php" class="w3-bar-item w3-button">Profile</a>
            <a href="http://localhost/DemoPHP/Php-Project-Group1/Login/logout.php" class="w3-bar-item w3-button">Logout</a>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="col-md-3 text-end">
          <a href="http://localhost/DemoPHP/Php-Project-Group1/Login/login.php" style="text-decoration: none;">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
          </a>
          <a href="http://localhost/DemoPHP/Php-Project-Group1/SignUp/signup.php" style="text-decoration: none;">
            <button type="button" class="btn btn-outline-primary me-2">Sign-up</button>
          </a>
        </div>
      <?php

      }

      ?>

      <!-- <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Logout</button>
        <button type="button" class="btn btn-outline-primary me-2">Your Profile</button>
      </div> -->
    </header>
  </div>

</body>


</html>