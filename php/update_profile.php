<?php

include '../includes/config.php';

if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}

$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   // --- Update name & email ---
   $update_name  = mysqli_real_escape_string($conn, trim($_POST['update_name']));
   $update_email = mysqli_real_escape_string($conn, trim($_POST['update_email']));

   mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');
   $message[] = 'Profile updated successfully!';

   // --- Password change (only if user filled in the old password field) ---
   $old_pass_input  = trim($_POST['update_pass']);   // what user typed as "old password"
   $new_pass_input  = trim($_POST['new_pass']);
   $conf_pass_input = trim($_POST['confirm_pass']);

   // Only proceed if the user actually typed something in the old-password field
   if($old_pass_input !== ''){

      // The hidden field contains the md5 hash already stored in DB
      $stored_hash = $_POST['old_pass'];

      // Hash what the user typed and compare with stored hash
      if(md5($old_pass_input) !== $stored_hash){
         $message[] = 'Old password is incorrect!';

      } elseif($new_pass_input === ''){
         $message[] = 'Please enter a new password!';

      } elseif($new_pass_input !== $conf_pass_input){
         $message[] = 'New password and confirm password do not match!';

      } else {
         // Hash the new password before saving
         $hashed_new = mysqli_real_escape_string($conn, md5($new_pass_input));
         mysqli_query($conn, "UPDATE `user_form` SET password = '$hashed_new' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'Password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = '../assets/uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

$page_title = "Update Profile";
include '../includes/header.php';
?>

<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="../assets/images/default-avatar.png">';
         }else{
            echo '<img src="../assets/uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">go back</a>
   </form>

</div>

<?php include '../includes/footer.php'; ?>
