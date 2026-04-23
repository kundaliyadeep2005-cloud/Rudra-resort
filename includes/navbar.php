<?php
$current_page = basename($_SERVER['PHP_SELF']);
$is_logged_in = isset($_SESSION['user_id']);
?>
<div class="nnav" <?php if(!$is_logged_in) echo 'style="background-color:rgba(232, 170, 103, 0.342);"'; ?>> 
  <nav class="navbar navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASE_URL ?>index.php">
      <img src="<?= BASE_URL ?>assets/images/main-logo.png" alt="" width="57" height="57" class="d-inline-block align-text-top">
    </a>
    <ul class="nav justify-content-center">
    <?php if($is_logged_in): ?>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'index.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'rooms.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>php/rooms.php">ROOMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'about-us.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>php/about-us.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'our-facility.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>php/our-facility.php">OUR FACILITY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'home.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>php/home.php">PROFILE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'past_booking.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>php/past_booking.php">PAST BOOKINGS</a>
      </li>
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'index.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'register.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>auth/register.php">SIGN-UP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= $current_page == 'login.php' ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>auth/login.php">LOG-IN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="<?= ($current_page == 'about-us.php' || $current_page == 'login_about.php') ? 'color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;' : 'color:brown;' ?>" href="<?= BASE_URL ?>php/about-us.php">ABOUT-US</a>
      </li>
    <?php endif; ?>
    </ul>
  </div>
  </nav>
</div>
