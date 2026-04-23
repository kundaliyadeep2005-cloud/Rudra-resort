<?php
$page_title = "My Profile";
include '../includes/config.php';

if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}

$user_id = $_SESSION['user_id'];

if(isset($_GET['logout'])){
   session_destroy();
   header('location:../auth/login.php');
   exit();
}

$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
$fetch  = mysqli_num_rows($select) > 0 ? mysqli_fetch_assoc($select) : [];

include '../includes/header.php';
?>

<div class="hp-wrapper">
    <div class="hp-card">

        <!-- Avatar -->
        <div class="hp-avatar-wrap">
            <?php if(empty($fetch['image'])): ?>
                <img src="<?= BASE_URL ?>assets/images/default-avatar.png" alt="Avatar" class="hp-avatar">
            <?php else: ?>
                <img src="<?= BASE_URL ?>assets/uploaded_img/<?= htmlspecialchars($fetch['image']) ?>" alt="Avatar" class="hp-avatar">
            <?php endif; ?>
        </div>

        <!-- User Info -->
        <h3 class="hp-name"><?= htmlspecialchars($fetch['name'] ?? 'User') ?></h3>
        <p class="hp-email"><?= htmlspecialchars($fetch['email'] ?? '') ?></p>

        <hr class="hp-divider">

        <!-- Info Rows -->
        <div class="hp-info-row">
            <span class="hp-info-label">&#128100; Username</span>
            <span class="hp-info-value"><?= htmlspecialchars($fetch['name'] ?? '-') ?></span>
        </div>
        <div class="hp-info-row">
            <span class="hp-info-label">&#128231; Email</span>
            <span class="hp-info-value"><?= htmlspecialchars($fetch['email'] ?? '-') ?></span>
        </div>
        <div class="hp-info-row">
            <span class="hp-info-label">&#128274; Account Status</span>
            <span class="hp-status-badge"><?= htmlspecialchars($fetch['status'] ?? 'active') ?></span>
        </div>

        <hr class="hp-divider">

        <!-- Action Buttons -->
        <div class="hp-actions">
            <a href="update_profile.php" class="hp-btn hp-btn-primary">&#9998; Update Profile</a>
            <a href="home.php?logout=<?= $user_id ?>" class="hp-btn hp-btn-danger">&#x23FB; Logout</a>
        </div>

    </div>
</div>

<?php include '../includes/footer.php'; ?>
