
<?php
include '../includes/config.php';

if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $pass = md5($_POST['pass']);

   $sql = $conn->prepare("SELECT * FROM `user_form` WHERE email = ? AND password = ?");
   $sql->bind_param('ss', $email, $pass);
   $sql->execute();
   $result = $sql->get_result();
   
   if($result->num_rows > 0){
      $row = $result->fetch_assoc();

      $_SESSION['user_id'] = $row['id'];
      header('Location: ' . BASE_URL . 'index.php');
      exit();
   } else {
      $message[] = 'Incorrect email or password!';
   }

   $sql->close(); 
   $conn->close(); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
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
        <a class="nav-link" aria-current="page"   style=color:brown href="register.php">SIGN-UP</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" aria-current="page"   style="color:rgb(255, 255, 255); background-color: brown; border-radius: 5px;" href="login.php">LOG-IN</a>
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
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="pass" placeholder="enter password" class="box" required>
         <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="register.php">regiser now</a></p>
   </form>

</div>

<?php include '../includes/footer.php'; ?>
