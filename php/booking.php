<?php 
$page_title = "Book Now";
include '../includes/config.php';
if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}
$room_id = isset($_GET['room_id']) ? intval($_GET['room_id']) : '';
include '../includes/header.php'; 
?>

<div class="booking-wrapper">
    <div class="booking-card">
        <div class="booking-header">
            <h2><i class="fas fa-bed"></i> Confirm Booking</h2>
            <p>Fill in the details below to complete your reservation</p>
        </div>

        <div class="booking-alert">
            <i class="fas fa-info-circle"></i>
            This simulates a booking placement. Please complete the form carefully.
        </div>

        <form action="#" autocomplete="off" onsubmit="return validation()">
            <?php if ($room_id): ?>
                <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
            <?php endif; ?>

            <div class="form-section">
                <h5 class="section-title"><i class="fas fa-user"></i> Personal Details</h5>
                <div class="form-row-2">
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" placeholder="Enter your full name" class="form-input">
                        <span class="error-msg" id="fullnamee"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" placeholder="Enter your email" class="form-input">
                        <span class="error-msg" id="emaill"></span>
                    </div>
                </div>
                <div class="form-row-2">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" placeholder="10-digit mobile number" class="form-input">
                        <span class="error-msg" id="phonee"></span>
                    </div>
                    <div class="form-group">
                        <label for="guests">Number of Guests</label>
                        <select id="guests" name="guests" required class="form-input">
                            <option value="">-- Select Guests --</option>
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5">5 Guests</option>
                            <option value="6">6 Guests</option>
                            <option value="7">7 Guests</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h5 class="section-title"><i class="fas fa-calendar-alt"></i> Booking Details</h5>
                <div class="form-row-2">
                    <div class="form-group">
                        <label for="checkin">Check-In Date</label>
                        <input type="date" id="checkin" name="checkin" class="form-input">
                        <span class="error-msg" id="checkinn"></span>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-Out Date</label>
                        <input type="date" id="checkout" name="checkout" class="form-input">
                        <span class="error-msg" id="checkoutt"></span>
                    </div>
                </div>
                <div class="form-row-1">
                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select id="room_type" name="room" required class="form-input">
                            <option value="">-- Select Room Type --</option>
                            <option value="standard">Standard Room</option>
                            <option value="deluxe">Deluxe Room</option>
                            <option value="suite">Suite</option>
                            <option value="premium">Premium Suite</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-submit">
                <button type="submit" id="btn" class="submit-btn">
                    <i class="fas fa-check-circle"></i> Confirm Booking
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function validation() {
        var full_name = document.getElementById('full_name').value.trim();
        var email = document.getElementById('email').value.trim();
        var phone = document.getElementById('phone').value.trim();
        var checkin = document.getElementById('checkin').value;
        var checkout = document.getElementById('checkout').value;

        // Clear previous errors
        document.getElementById('fullnamee').innerHTML = "";
        document.getElementById('emaill').innerHTML = "";
        document.getElementById('phonee').innerHTML = "";
        document.getElementById('checkinn').innerHTML = "";
        document.getElementById('checkoutt').innerHTML = "";

        if (full_name === "") {
            document.getElementById('fullnamee').innerHTML = "Please enter your full name.";
            return false;
        }
        if (full_name.length < 2) {
            document.getElementById('fullnamee').innerHTML = "Name must be at least 2 characters.";
            return false;
        }
        if (!isNaN(full_name)) {
            document.getElementById('fullnamee').innerHTML = "Name must contain alphabets only.";
            return false;
        }
        if (email === "") {
            document.getElementById('emaill').innerHTML = "Please enter your email.";
            return false;
        }
        if (email.indexOf('@') <= 0) {
            document.getElementById('emaill').innerHTML = "Invalid email: '@' position is wrong.";
            return false;
        }
        if (email.charAt(email.length - 4) !== '.' && email.charAt(email.length - 3) !== '.') {
            document.getElementById('emaill').innerHTML = "Invalid email format.";
            return false;
        }
        if (phone === "") {
            document.getElementById('phonee').innerHTML = "Please enter your phone number.";
            return false;
        }
        if (isNaN(phone)) {
            document.getElementById('phonee').innerHTML = "Phone must contain digits only.";
            return false;
        }
        if (phone.length !== 10) {
            document.getElementById('phonee').innerHTML = "Phone number must be exactly 10 digits.";
            return false;
        }
        if (checkin === "") {
            document.getElementById('checkinn').innerHTML = "Please select a check-in date.";
            return false;
        }
        if (checkout === "") {
            document.getElementById('checkoutt').innerHTML = "Please select a check-out date.";
            return false;
        }
        if (checkout <= checkin) {
            document.getElementById('checkoutt').innerHTML = "Check-out must be after check-in.";
            return false;
        }

        alert("✅ Simulation: Your room has been successfully booked!");
        window.location.href = "../index.php";
        return false;
    }
</script>
<?php include '../includes/footer.php'; ?>
