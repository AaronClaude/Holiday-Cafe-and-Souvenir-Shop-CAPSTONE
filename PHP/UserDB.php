<?php
session_start();
include "DBconn.php";

if (isset ($_POST ['uname'] ) && isset ($_POST ['password'])) {
    
    function validate ($data ){
        $data = trim($data) ;
        $data = stripslashes ($data);
        $data = htmlspecialchars ($data);
        return $data;
  }
    $uname =validate ($_POST['uname']);
    $password =validate ($_POST ['password']);

    if (empty ($uname) ) {
        header ("Location:userlogin.php?error=User Name is required");
        exit ();
    }else if(empty ($password) ){
        header ("Location:userlogin.php?error=Password is required");
        exit ();

    }else{
        $sql = "SELECT * FROM `useracc` WHERE uname='$uname' AND password= '$password'";
        $result=mysqli_query($con, $sql);
        if (mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if ($row['uname']===$uname && $row['password']===$password){
                $_SESSION['uname']=$row['uname'];
                $_SESSION['password']=$row['password'];
                $_SESSION['id']=$row['id'];
                header("Location:userhome.php");
                exit();
            }else{
                header ("Location:userlogin.php?error=Incorrect User name or Password");
                exit ();
            }
        }else{
            header ("Location:userlogin.php?error=Incorrect User name or Password");
            exit ();

        }
    }

}else{
    header("Location:userlogin.php");
    exit ();
}
?>
