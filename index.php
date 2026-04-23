<?php 
$page_title = "Hotel Reservation - Home"; 
include 'includes/config.php'; 
include 'includes/header.php'; 
?>
        
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="assets/images/index1.jpg" class="d-block w-100 hero-img" alt="Resort View">
        <div class="carousel-caption d-none d-md-block hero-caption">
          <h1 class="hero-title">Your Dream Resort Is Here</h1>
          <p class="hero-subtitle">Experience luxury and comfort like never before.</p>
          <a href="php/rooms.php" class="hero-btn">Book Now</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" data-bs-interval="5000">
        <img src="assets/images/index2.jpg" class="d-block w-100 hero-img" alt="Holiday">
        <div class="carousel-caption d-none d-md-block hero-caption">
          <h1 class="hero-title">Time For A Perfect Holiday</h1>
          <p class="hero-subtitle">Relax, unwind, and create unforgettable memories.</p>
          <a href="php/about-us.php" class="hero-btn">Discover More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" data-bs-interval="5000">
        <img src="assets/images/index3.jpg" class="d-block w-100 hero-img" alt="Experience">
        <div class="carousel-caption d-none d-md-block hero-caption">
          <h1 class="hero-title">Guaranteed Best Experience</h1>
          <p class="hero-subtitle">Premium facilities and world-class service await you.</p>
          <a href="php/our-facility.php" class="hero-btn">Explore Facilities</a>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<?php include 'includes/footer.php'; ?>
