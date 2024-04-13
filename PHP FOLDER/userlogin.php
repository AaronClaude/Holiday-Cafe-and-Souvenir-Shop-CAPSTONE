<?php
include 'DBconn.php';
if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  
  $sql="INSERT INTO `useracc` (uname,email,mobile,password) values ('$uname','$email','$mobile','$password') ";
  $result = mysqli_query($con, $sql);
  if($result){
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
    
    <link rel="stylesheet" href="login.css">
    <title>HS cafe log in</title>
</head>

<body>
    <?php @include 'formheader.php'?>

    <video autoplay muted loop id="Video">
      <source src="loop-video.mp4" type="video/mp4">
    </video>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
        <form method="post">
                <h1>Create Account</h1>
                <input type="text" placeholder="Enter Username" name="uname">
                <input type="text" placeholder="Enter Email" name="email">
                <input type="text" placeholder="Enter Username" name="mobile">
                <input type="password" placeholder="Enter Password" name="password">
                  
                <button type="submit" class="btn" name="submit">Submit</button>
            </form>
        </div>
        <div class="form-container sign-in">
        <form action="UserDB.php" method="post">
                  <?php if (isset($_GET['error'])){ ?>
                    <p class="error"><?php echo $_GET ['error'];?></p>
                  <?php } ?>  
                <h1>Sign In</h1>
                <input type="text" placeholder="Enter Username" name="uname">
                <input type="password" placeholder="Enter Password" name="password">
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Dear Customer!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>