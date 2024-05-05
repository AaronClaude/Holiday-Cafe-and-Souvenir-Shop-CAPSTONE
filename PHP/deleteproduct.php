<?php
include 'DBconn.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
}
    $sql = "DELETE FROM `products` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:addProducts-template.php");
    }
    else{
        echo"Not able to delete";
    }
    
?>