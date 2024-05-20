<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>User Confirmation</title>
</head>

<style>
/* Nav bar design and format*/
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
  width: 100%;
  top: 0;
  padding: 10px 10px;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #F4F1EC;
}

header {
  background: #FFEDD2;
  font-weight: 400;
  font-style: normal;
  color: #252525;
  border-bottom: 1px solid #733311;
  display: flex;
  align-items: center;
  padding: 2.5px;
  position: fixed; 
  top: 0; 
  width: 100%; 
  height: 75px;
  z-index: 1000;
  transition: 0.3s;
}

header .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  
}

header img {
  width: 55px; 
  height: auto;
  margin-left: 15px;
  border-radius: 50%;
  float: left;
  box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
}

header img:hover {
  transform: scale(1.1);
}

header h1 {
  font-size: 18px;
  font-weight: 500;
  margin-left: -48rem;
  padding-top: 5px;
}


.account-confirmation {
    margin: 5% auto; 
    padding: 30px;
    margin-top: 150px;
    border-radius: 15px;
    border: 2px #733311 solid;
    background-color: #FFEDD2;
    width: 500px;
    height: 350px; 
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
}

img {
    height: 125px;
    width: 125px;
    border-radius: 50%;
    margin-left: 35%;
}

h3 {
    text-align: center;
    color: #733311;
    margin-top: 20px;
    margin-bottom: 30px;
}

.btn-1 {
  text-decoration: none;
  color: #FFEDD2;
  background-color: #733311;
  border: 2px solid #733311;
  padding: 10px 20px;
  border-radius: 25px;
  margin-left: 35px;
}


.btn-1:hover {
  color: #733311;
  background-color: transparent;
  border: 2px solid #733311;
  transition: 0.5s ease
}

.btn-2 {
  text-decoration: none;
  color: #733311;
  border: 2px solid #733311;
  padding: 10px 20px;
  border-radius: 25px;
  margin: 5px;
}


.btn-2:hover {
  background-color: #733311;
  color: #FFEDD2;
  transition: 0.5s ease
}

.btn-3 {
  text-decoration: none;
  color: #733311;
  border: 2px solid #733311;
  padding: 10px 20px;
  border-radius: 25px;
  margin-right: 25px;
}

.btn-3:hover {
  background-color: #733311;
  color: #FFEDD2;
  transition: 0.5s ease
}

</style>

<body>

    <header>
            <div class="container">
                <a href="#home"><img src="../IMG/logos/nav-logo.png"></a>
                <h1 id="nav-title">Holiday Cafe & Souvenir Shop</h1>
                <nav>
                    <a href="../index.php" class="btn-3">Go Back</a>
                </nav>
            </div>
        </header>
    <div class="account-confirmation">
        <div class="container">
            <img src="../IMG/logos/main-logo.png" alt="main-logo">
            <h3>Do you want to sign up for a 10% discount or continue as a guest?</h3>

            <a href="userlogin.php" class="btn-1">Sign Up/Login</a>
            <a href="userhome-guest.php" class="btn-2">Continue as Guest</a>
        </div>
    </div>


</body>
</html>