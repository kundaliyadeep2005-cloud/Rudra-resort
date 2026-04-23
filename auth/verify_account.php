<?php
include '../includes/config.php';
$email = $_REQUEST['email'];

$q = "select * from user_form where email='$email'";
$result = mysqli_query($conn, $q);
$count = mysqli_num_rows($result);

if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $status = $row[8];
        if ($status == "Active") {

            $_SESSION['success'] = "Account is already activated";
        } else {
            $updt = "update user_form set `status`='Active' where email='$email'";
            if (mysqli_query($conn, $updt)) {
                setcookie('success', "Activation activated successfully", time() + 2, "/");
            } else {
                setcookie('error', "Error in activating Account. Please try again later.", time() + 2, "/");
            }
        }
?>
        <script>
            window.location.href = "login.php";
        </script>
    <?php
    }
} else {
    setcookie('error', "Either Email is not registered or token is incorrect.", time() + 2, "/");
    ?>
    <script>
        window.location.href = "register.php";
    </script>
<?php
}
