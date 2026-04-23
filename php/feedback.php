<?php
$page_title = "Rating & Feedback";
include '../includes/config.php';
if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}

$room_id = isset($_GET['room_id']) ? intval($_GET['room_id']) : null;
$message = '';

if (isset($_POST['btn'])) {
    $rating   = isset($_POST['rating'])   ? intval($_POST['rating'])                   : null;
    $feedback = isset($_POST['feedback']) ? htmlspecialchars(trim($_POST['feedback']))  : null;

    if ($rating !== null && $feedback !== null && $feedback !== '' && $room_id !== null) {
        $stmt = $con->prepare("UPDATE rooms SET rating = ?, review = ? WHERE id = ?");
        $stmt->bind_param("isi", $rating, $feedback, $room_id);
        if ($stmt->execute()) {
            $message = "<div class='alert alert-success'>✔ Feedback submitted successfully! Thank you.</div>";
        } else {
            $message = "<div class='alert alert-danger'>✘ Error: Feedback could not be submitted.</div>";
        }
        $stmt->close();
    } else {
        $message = "<div class='alert alert-warning'>⚠ Please select a star rating and write your feedback.</div>";
    }
}
include '../includes/header.php';
?>

<div class="fb-wrapper">
    <div class="fb-box">

        <h2 class="fb-heading">Rate &amp; Review</h2>
        <p class="fb-sub">Share your experience about this room</p>
        <hr>

        <?php if ($message) echo $message; ?>

        <form method="post" action="feedback.php<?php if ($room_id !== null) echo '?room_id=' . $room_id; ?>">

            <!-- Star Rating -->
            <div class="fb-field">
                <label class="fb-label">Your Rating</label>
                <div class="star-rating">
                    <input type="radio" name="rating" value="5" id="star5">
                    <label for="star5">&#9733;</label>
                    <input type="radio" name="rating" value="4" id="star4">
                    <label for="star4">&#9733;</label>
                    <input type="radio" name="rating" value="3" id="star3">
                    <label for="star3">&#9733;</label>
                    <input type="radio" name="rating" value="2" id="star2">
                    <label for="star2">&#9733;</label>
                    <input type="radio" name="rating" value="1" id="star1">
                    <label for="star1">&#9733;</label>
                </div>
            </div>

            <!-- Review Textarea -->
            <div class="fb-field">
                <label class="fb-label" for="feedback">Your Review</label>
                <textarea id="feedback" name="feedback" placeholder="Write your feedback here..."></textarea>
            </div>

            <!-- Buttons -->
            <div class="fb-actions">
                <button type="submit" name="btn" class="fb-submit-btn">Submit</button>
                <a href="rooms.php" class="fb-back-link">&#8592; Back to Rooms</a>
            </div>

        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
