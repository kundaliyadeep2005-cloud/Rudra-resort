<?php
$page_title = "Hotel Reservation - Rooms";
include '../includes/config.php';
if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}
include '../includes/header.php';
?>

<div class="main-back">
    <h2 class="rooms-heading">&#x1F6CF;&#xFE0F; Our Rooms</h2>

    <div class="row row-cols-1 row-cols-md-2 g-4" style="max-width:1100px; margin:0 auto;">
        <?php
        $sql = "SELECT id, images, name, description, price, rating, review FROM rooms";
        $result = $con->query($sql);
        $collapseCounter = 1;

        while ($row = $result->fetch_assoc()) {
            $clean_img = rtrim($row["images"], '"');
            $clean_img = str_replace('images/', 'assets/images/', $clean_img);
        ?>
        <div class="col">
            <div class="card">
                <img src="<?php echo BASE_URL . $clean_img; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['name']); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row["name"]); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($row["description"]); ?></p>

                    <!-- Star Rating (read-only display) -->
                    <div class="rating">
                        <?php for ($i = 5; $i >= 1; $i--): ?>
                        <input type="radio"
                               name="rating-<?php echo $collapseCounter; ?>"
                               value="<?php echo $i; ?>"
                               id="star<?php echo $i . '-' . $collapseCounter; ?>"
                               <?php if ($i == $row["rating"]) echo "checked"; ?>
                               disabled>
                        <label for="star<?php echo $i . '-' . $collapseCounter; ?>"></label>
                        <?php endfor; ?>
                    </div>

                    <!-- Action Buttons -->
                    <div class="room-actions">
                        <button type="button" class="r-btn"
                                data-bs-toggle="collapse"
                                data-bs-target="#demo-<?php echo $collapseCounter; ?>">
                            💰 View Price
                        </button>
                        <a href="booking.php?room_id=<?php echo $row['id']; ?>">
                            <button class="r-btn">📅 Book Now</button>
                        </a>
                        <a href="feedback.php?room_id=<?php echo $row['id']; ?>">
                            <button class="r-btn">⭐ Rate &amp; Review</button>
                        </a>
                    </div>

                    <!-- Price Collapse -->
                    <div id="demo-<?php echo $collapseCounter; ?>" class="collapse">
                        <label class="price">&#x20B9; <?php echo htmlspecialchars($row["price"]); ?> /- per night</label>
                    </div>

                </div>
            </div>
        </div>
        <?php
            $collapseCounter++;
        }
        ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
