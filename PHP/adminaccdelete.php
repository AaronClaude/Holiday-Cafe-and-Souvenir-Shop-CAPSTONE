<?php
include 'DBconn.php';
if(isset($_GET['deleteid'])){
    $empid=$_GET['deleteid'];
}
    $sql="DELETE FROM `admin` WHERE empid='$empid'";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:adminacc.php");
    }
    else{
        echo"Not able to delete";
    }
    
?>