<?php
session_start();
include "DBconn.php";

if (isset ($_POST ['empid'] ) && isset ($_POST ['password'])) {
    
    function validate ($data ){
        $data = trim($data) ;
        $data = stripslashes ($data);
        $data = htmlspecialchars ($data);
        return $data;
  }
    $empid =validate ($_POST['empid']);
    $password =validate ($_POST ['password']);

    if (empty ($empid) ) {
        header ("Location:cashierlogin.php?error=User Name is required");
        exit ();
    }else if(empty ($password) ){
        header ("Location:cashierlogin.php?error=Password is required");
        exit ();

    }else{
        $sql = "SELECT * FROM `cashier` WHERE empid='$empid' AND password= '$password'";
        $result=mysqli_query($con, $sql);
        if (mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if ($row['empid']===$empid && $row['password']===$password){
                $_SESSION['empid']=$row['empid'];
                $_SESSION['password']=$row['password'];
                $_SESSION['id']=$row['id'];
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
