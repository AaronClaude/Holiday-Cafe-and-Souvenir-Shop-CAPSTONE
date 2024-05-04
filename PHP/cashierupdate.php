<?php
include 'DBconn.php';
session_start();
// Check if updateid is set in the URL
if(isset($_GET['updateempid'])){
    $empid = $_GET['updateempid'];
    $sql = "SELECT * FROM `cashier` WHERE empid='$empid' ";
    $result = mysqli_query($con, $sql);

    // Check if user exists
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $image = $row['image'];
        $empid = $row['empid'];
        $email = $row['email'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $mobile = $row['mobile'];
        $address = $row['address'];
        $password = $row['password'];
    
    }
}

// Check if form is submitted
if(isset($_POST['submit']) && isset($_FILES['image'])) {
    $empid = $_GET['updateempid'];

    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile =$_POST['mobile'];
    $address =$_POST['address'];
    $password =$_POST['password'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = 'profileimg/'.$image;

        
            $sql = "UPDATE `cashier` SET  email = '$email', fname = '$fname', lname = '$lname', mobile = '$mobile', 
            address = '$address' , password = '$password', image = '$image' WHERE empid = '$empid'";   
            $result = mysqli_query($con, $sql);
            if($result){
                // Move the uploaded file after the database update
            if(move_uploaded_file($tmp_name, $folder)){
                header("Location: adminacc.php");
                exit();
            } else {
                echo "File upload failed.";
            }
        } else {
            echo "Update failed: " . mysqli_error($con);    
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Update.css">
    <title>UPDATE PROFILE</title>
</head>

<body>

<form method="post" action="" enctype="multipart/form-data">
    
        <h1>UPDATE PROFILE</h1>
        <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
        <input type="text" placeholder="Enter Firstname" name="fname"  value="<?php echo $fname;?>">
        <input type="text" placeholder="Enter Lastname" name="lname"  value="<?php echo $lname;?>">
        <input type="text" placeholder="Enter Mobile No." name="mobile" value="<?php echo $mobile;?>">
        <input type="text" placeholder="Enter Address" name="address"  value="<?php echo $address;?>">       
        <input type="password" placeholder="Enter Password" name="password"  value="<?php echo $password;?>">
        <input type="file" name="image" id="file">

        <button type="submit" class="btn-1" name="submit">UPDATE</button>
      </form>
</body>

</html>
