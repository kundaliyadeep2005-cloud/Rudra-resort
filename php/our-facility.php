<?php 
include '../includes/config.php';
if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}
$page_title = "Our Services";
include '../includes/header.php';

// Fetch facilities data once
$facilities = [];
$f_result = $con->query("SELECT * FROM `our-facilities` LIMIT 1");
if($f_result && $f_result->num_rows > 0){
    $facilities = $f_result->fetch_assoc();
}
?>

<div class="facility-page">

    <!-- Page Header -->
    <div class="facility-hero">
        <h1><i class="fas fa-hotel"></i> Our Facilities &amp; Services</h1>
        <p>Everything you need for a comfortable and memorable stay</p>
    </div>

    <!-- Services Grid -->
    <section class="facility-section">
        <div class="container-fluid px-4 px-md-5">
            <div class="row g-4 justify-content-center">

                <!-- Room Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-icon-wrap" style="background: linear-gradient(135deg,#e74c3c,#c0392b);">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                        <h4>Room Service</h4>
                        <p><?php echo !empty($facilities['room_service']) ? htmlspecialchars($facilities['room_service']) : '24/7 in-room dining and personal butler service at your fingertips.'; ?></p>
                        <a href="about-us.php" class="facility-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Room Cleaning -->
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-icon-wrap" style="background: linear-gradient(135deg,#3498db,#2980b9);">
                            <i class="fas fa-broom"></i>
                        </div>
                        <h4>Room Cleaning</h4>
                        <p><?php echo !empty($facilities['room_cleaning']) ? htmlspecialchars($facilities['room_cleaning']) : 'Daily housekeeping with fresh linen, towels and thorough sanitation.'; ?></p>
                        <a href="about-us.php" class="facility-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Order Meal -->
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-icon-wrap" style="background: linear-gradient(135deg,#f39c12,#e67e22);">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>Order Meal</h4>
                        <p><?php echo !empty($facilities['order_meal']) ? htmlspecialchars($facilities['order_meal']) : 'Order from our multi-cuisine restaurant menu delivered fresh to your room.'; ?></p>
                        <a href="about-us.php" class="facility-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Any Help -->
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-icon-wrap" style="background: linear-gradient(135deg,#27ae60,#1e8449);">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>Any Help</h4>
                        <p><?php echo !empty($facilities['any_help']) ? htmlspecialchars($facilities['any_help']) : 'Our concierge team is always available to assist you with any request.'; ?></p>
                        <a href="about-us.php" class="facility-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Emergency -->
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-icon-wrap" style="background: linear-gradient(135deg,#e74c3c,#922b21);">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h4>Emergency</h4>
                        <p><?php echo !empty($facilities['emergency']) ? htmlspecialchars($facilities['emergency']) : 'Round-the-clock emergency assistance and first-aid support on premises.'; ?></p>
                        <a href="about-us.php" class="facility-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Any Issues -->
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card">
                        <div class="facility-icon-wrap" style="background: linear-gradient(135deg,#8e44ad,#6c3483);">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <h4>Any Issues</h4>
                        <p><?php echo !empty($facilities['any_issues']) ? htmlspecialchars($facilities['any_issues']) : 'Report any concern instantly — we resolve issues promptly and professionally.'; ?></p>
                        <a href="about-us.php" class="facility-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Additional Hotel Amenities -->
    <section class="amenities-section">
        <div class="amenities-header">
            <h2>Hotel Amenities</h2>
            <p>Enjoy world-class amenities during your stay</p>
        </div>
        <div class="amenities-grid">

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">📶</span>
                </div>
                <span>Free Wi-Fi</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">🅿</span>
                </div>
                <span>Free Parking</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">🏊</span>
                </div>
                <span>Swimming Pool</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">💆</span>
                </div>
                <span>Spa &amp; Wellness</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">🏋️</span>
                </div>
                <span>Fitness Center</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">☕</span>
                </div>
                <span>Café &amp; Bar</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">🚐</span>
                </div>
                <span>Airport Shuttle</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">🔒</span>
                </div>
                <span>24/7 Security</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">❄️</span>
                </div>
                <span>AC Rooms</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">📺</span>
                </div>
                <span>Smart TV</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">👶</span>
                </div>
                <span>Kids Friendly</span>
            </div>

            <div class="amenity-item">
                <div class="amenity-icon">
                    <span class="amenity-emoji">🐾</span>
                </div>
                <span>Pet Friendly</span>
            </div>

        </div>
    </section>

</div>

<?php include '../includes/footer.php'; ?>
