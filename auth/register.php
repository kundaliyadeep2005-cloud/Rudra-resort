<?php

include '../includes/config.php';



if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);

    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = '../assets/uploaded_img/'.$image;

    $select = $conn->prepare("SELECT * FROM `user_form` WHERE email = ?");
    $select->bind_param('s', $email);
    $select->execute();
    $select_result = $select->get_result();
    $count = $select_result->num_rows;

    if ($count > 0) {
        $message[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password not matched!';
        } elseif ($image_size > 2000000) {
            $message[] = 'Image size is too large!';
        } else {
            $insert = $conn->prepare("INSERT INTO `user_form`(name, email, password, image,status) VALUES(?,?,?,?,'active')");
            $insert->bind_param('ssss', $name, $email, $cpass, $image);
            $insert->execute();
            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                header('location:login.php');
                exit();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  


   <!-- custom css file link  -->
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/index.css">
   <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="nnav" style="background-color:rgba(232, 170, 103, 0.342);"> <nav class="navbar navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
      <img src="../assets/images/main-logo.png" alt="" width="57" height="57" class="d-inline-block align-text-top">
    </a>
    <ul class="nav justify-content-center">
      
    <li class="nav-item">
          <a class="nav-link" style=color:brown href="../index.php">HOME</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page"   style="color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;" href="register.php">SIGN-UP</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page"   style=color:brown href="login.php">LOG-IN</a>
      </li>

   
        <li class="nav-item">
          <a class="nav-link" style=color:brown href="../php/about-us.php">ABOUT-US</a>
        </li>
          </ul>
          </div>
          </nav>
        </div>
          </li>
        </li>
      </ul>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="pass" placeholder="enter password" class="box" required>
      <input type="password" name="cpass" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

<?php include '../includes/footer.php'; ?>
