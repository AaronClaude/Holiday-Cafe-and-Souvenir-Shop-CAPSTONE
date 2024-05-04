<?php
session_start();
include "DBconn.php";

if (isset ($_POST ['email'] ) && isset ($_POST ['password'])) {
    
    function validate ($data ){
        $data = trim($data) ;
        $data = stripslashes ($data);
        $data = htmlspecialchars ($data);
        return $data;
  }
    $email =validate ($_POST['email']);
    $password =validate ($_POST ['password']);

    if (empty ($email) ) {
        header ("Location:cashierlogin.php?error=User Name is required");
        exit ();
    }else if(empty ($password) ){
        header ("Location:cashierlogin.php?error=Password is required");
        exit ();

    }else{
        $sql = "SELECT * FROM `cashier` WHERE email='$email' AND password= '$password'";
        $result=mysqli_query($con, $sql);
        if (mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if ($row["email"] === $email && $row['password'] === $password){
                $_SESSION['email']=$row['email'];
                $_SESSION['password']=$row['password'];
                $_SESSION['image']=$row['image'];
                header("Location:cashierpanel.php");
                exit();
            }else{
                header ("Location:cashierlogin.php?error=Incorrect User name or Password");
                exit ();
            }
        }else{
            header ("Location:cashierlogin.php?error=Incorrect User name or Password");
            exit ();

        }
    }

}else{
    header("Location:cashierlogin.php");
    exit ();
}
?>
