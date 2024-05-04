<?php
include 'DBconn.php';

// Check if updateid is set in the URL
if(isset($_GET['updateempid'])){
    $empid = $_GET['updateempid'];
    $sql = "SELECT * FROM `admin` WHERE empid='$empid' ";
    $result = mysqli_query($con, $sql);

    // Check if user exists
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $empid = $row['empid'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        $image = $row['image'];
    
    }
}

// Check if form is submitted
if(isset($_POST['submit']) && isset($_FILES['image'])) {
    $empid = $_GET['updateempid'];

    $empid = $_POST['empid'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = 'profileimg/'.$image;

        
            $sql = "UPDATE `admin` SET  empid = '$empid', email = '$email', mobile = '$mobile', password = '$password', image = '$image' WHERE empid = '$empid'";   
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
    <link rel="stylesheet" href="../CSS/update.css">
    <title>CRUD</title>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        <h1>UPDATE PROFILE</h1>
        <input type="text" placeholder="Update Employee ID" name="empid" value="<?php echo $empid; ?>">
        <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
        <input type="text" placeholder="Enter Mobile No." name="mobile" value="<?php echo $mobile; ?>">
        <input type="password" placeholder="Enter Password" name="password" value="<?php echo $password; ?>">
        <input type="file" name="image" id="file">
        <button type="submit" class="btn-1" name="submit">UPDATE</button>
    </form>
</body>

</html>
