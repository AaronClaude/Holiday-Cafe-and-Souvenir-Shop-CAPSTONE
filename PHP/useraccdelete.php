<?php
include 'DBconn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
}
    $sql="DELETE FROM `useracc` where id='$id'";

    $result=mysqli_query($con,$sql);

    if($result){
        header("location:useracc.php");
    }
    else{
        echo"Not able to delete";
    }
    
?>