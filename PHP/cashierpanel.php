
<?php
include 'DBconn.php';
session_start();

if (isset ($_SESSION ['id'] ) && isset ($_SESSION ['empid'])){



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CX HOME</title>
</head>
<body>

    <h1>WELCOME cashier PUTANGINA MO!</h1>
    <a href="Logout.php">Log out</a>
</body>
</html>


<?php
}else{
    header("Location:cashierlogin.php");
    exit();
}
?>