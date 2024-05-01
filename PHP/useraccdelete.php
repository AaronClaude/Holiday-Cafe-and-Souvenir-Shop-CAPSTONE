<?php
include 'DBconn.php';
if(isset($_GET['deleteid'])){
    $empid=$_GET['deleteid'];
}
    $sql="DELETE FROM `cashier` where empid='$empid'";

    $result=mysqli_query($con,$sql);

    if($result){
        header("location:useracc.php");
    }
    else{
        echo"Not able to delete";
    }
    
?>