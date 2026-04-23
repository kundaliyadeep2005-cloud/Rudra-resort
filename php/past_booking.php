<?php 
include '../includes/config.php';
if(!isset($_SESSION['user_id'])){
   header('location:../auth/login.php');
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../assets/css/past_booking.css" rel="stylesheet">
  <style>
    
</style>
</head>
<body>

<div class="nnav"> <nav class="navbar navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">
        <img src="../assets/images/main-logo.png" alt="" width="57" height="57" class="d-inline-block align-text-top">
      </a>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" style="color:brown;" href="../index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style=color:brown href="rooms.php">ROOMS</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" style=color:brown href="about-us.php">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style=color:brown href="our-facility.php">OUR FACILITY</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" style=color:brown href="home.php">PROFILE</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" style="color:rgb(255, 255, 255); background-color: brown ; border-radius: 5px;" href="past_booking.php">PAST BOOKINGS</a>
        </li>
            </ul>
            </div>
            </nav>
          </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sr.no</th>
            <th scope="col">ROOM-PHOTOS</th>
            <th scope="col">ROOM-TYPE</th>
            <th scope="col">PRICE</th>
            <th scope="col">DATE</th>
            <th scope="col">ROOM-SERVICE</th>
            <th scope="col">PAYMENT METHOD</th>


          </tr>
        </thead>
        <tbody>
          <tr class="tr">
            <th scope="row">1</th>
            
            <td> <img src="../assets/images/r30.jpg" class="" alt="" style="height: 150px;"> </td>
           
            <td>Lexury room</td>
        
            <td>4000rs only.</td>
            <td>22 to 23/3/2022</td>
            <td>MEAL & Room cleaning</td>
            <td>CARD</td>



          </tr>
          <tr>
            <th scope="row">2</th>
            <td> <img src="../assets/images/r19.jpg" style="height: 150px;"> </td>
            <td>Sea-side view room</td>
            <td>3000rs only.</td>
            <td>12 to 14/5/2023</td>
            <td>NOTHING</td>
            <td>CASH</td>


          </tr>
          <tr>
            <th scope="row">3</th>
            <td> <img src="../assets/images/h1.jpg" class="" alt="" style="height: 150px;"> </td>

            <td>lexury class</td>

            <td>5000rs only.</td>
            <td>18 to 20/8/2022</td>
            <td>Room cleaning</td>
            <td>UPI</td>



          </tr>
          <tr>
            <th scope="row">4</th>
            <td> <img src="../assets/images/r23.jpg" class="" alt="" style="height: 150px;"> </td>

            <td>super-lative class</td>

            <td>6000rs only.</td>
            <td>1 to 5/10/2022</td>
            <td>Room cleaning & Meal</td>
            <td>UPI</td>



          </tr>

      </table>
<?php include '../includes/footer.php'; ?>
</html>
