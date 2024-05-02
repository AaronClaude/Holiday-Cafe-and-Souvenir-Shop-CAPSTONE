<?php
include 'DBconn.php';
if (isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $image= $_FILES['image']['name'];
  $tmp_name= $_FILES['image']['tmp_name'];
  $folder = 'profileimg/'.$image;


    $sql = "INSERT INTO `useracc` (uname,email,mobile,password,image) values ('$uname','$email','$mobile','$password','$image') ";
    $result = mysqli_query($con, $sql);
    if(move_uploaded_file($tmp_name,$folder)){
      echo "<h2>Successfully Registered</h2>";
    }else{
      die(mysqli_error($con));
    }
  
  }
  
 
?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Poppins font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/login.css">
  <title>H%S - LOGIN FORM</title>
</head>

<body>
  <div class="acc-container" id="container">
    <div class="form-container sign-up">
      <form method="post" action="" enctype="multipart/form-data">

        <h1>REGISTER</h1>
        <input type="text" placeholder="Enter Username" name="uname">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="text" placeholder="Enter Mobile No." name="mobile">
        <input type="password" placeholder="Enter Password" name="password">
        <input type="file" name="image" id="file">

        <button type="submit" class="btn-1" name="submit">SIGN UP</button>
      </form>
    </div>


    <div class="form-container sign-in">
      <form action="UserDB.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <h1>SIGN IN</h1>
        <input type="text" placeholder="Enter Username" name="uname">
        <input type="password" placeholder="Enter Password" name="password">
        <button type="submit" class="btn-1">LOGIN</button>
        <h3>OR</h3>
        <a href="#" class="btn-3">GO BACK</a>
        <a href="#">Forgot Password?</a>
      </form>
    </div>


    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h2>Dear Customer!</h1>
            <p>Enter your personal details to use all of site features.</p>
            <button class="btn-2" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h2>Hello, Friend!</h1>
            <p>Register with your personal details to use all of site features.</p>
            <button class="btn-2" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../JS/script.js"></script>
</body>

</html>