<?php
include 'DBconn.php';
session_start();
$empid= $_SESSION['empid'];
if (isset ($_SESSION ['empid'] ) && isset ($_SESSION ['password'])){

    function getCount($tableName) 
    {
    global $con;
    $table=mysqli_real_escape_string($con, $tableName);
    $query ="SELECT * FROM $table";
    $result = mysqli_query($con,$query);
    $totalCount = mysqli_num_rows($result);
    return $totalCount;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/adminpanel.css">
    <title>ADMIN PANEL</title>
</head>
<body>

 



    <div class="profile">
    <?php
                $select = mysqli_query($con,"SELECT * FROM `admin` WHERE `empid`='$empid' ") or die('query failed');
                    if(mysqli_num_rows($select)> 0){
                        $fetch = mysqli_fetch_assoc($select);
                    }
                    if($fetch['image'] == ''){
                        echo '<img src="images/default-avatar.png">';
                    }else{
                        echo '<img src="profileimg/'.$fetch['image'].'">';
                    }
                ?>
                <h2>Hello Admin</h2>
                <h3><?php echo $fetch['empid']; ?></h3>
                <a href="admnprofile_update.php" class="btn">update profile</a>
                <a href="adminlogin.php" class="delete-btn">logout</a>
                <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>

        <div class="update-profile">
            <form action="" method="post" enctype="multipart/form-data">
                            <span>username :</span>
                            <input type="text" name="update_empid" value="<?php echo $fetch['empid']; ?>" ><br></br>
                            <span>your email :</span>
                            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" ><br></br>
                            <span>update your pic :</span>
                            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" ><br></br>
                            <input type="hidden" name="old_password" value="<?php echo $fetch['password']; ?>"><br></br>
                            <span>old password :</span>
                            <input type="password" name="update_password" placeholder="enter previous password" ><br></br>
                            <span>new password :</span>
                            <input type="password" name="new_password" placeholder="enter new password" ><br></br>
                            <span>confirm password :</span>
                            <input type="password" name="confirm_password" placeholder="confirm new password" ><br></br>
            </form>
        </div>
    </div>

<div class="panel">
   <div class="colrow">
        <div class="row">
                <div class="column">
                    <article>
                        <a href="">Customer Account</a>
                            <img src="person-circle-outline.svg" class="icon">
                    </article>
                </div>


                <div class="column" a href="adminacc.php"></a>
                
                    <article>
                        <a href="adminacc.php">Admin Account</a>
                            <img src="person-circle-sharp.svg" class="icon">
                    </article>
                </div>
        </div>


        <div class="row">
            <div class="column">
            <article>
                <a href="">Product</a>
                    <img src="shirt-sharp.svg" class="icon">
            </article>
            </div>


            <div class="column">
                <article>
                    <a href="">Sales history</a>
                        <img src="receipt-sharp.svg" class="icon">
                </article>
            </div>
         </div>
   </div>
   <div class="box-container">
        <div class="box">
            <article>
                <a href="CXacc.php">CX Acc</a>
                <h5>
                   <?= getCount('useracc')?>
                </h5>
            </article>
        </div>

   
        <div class="box">
            <article>
                <a href="AdminACC.php">ADMIN Acc</a>
                <?= getCount('admin')?>
            </article>
        </div>
        


            <div class="box">
                <article>
                    <a href="admin.php">CASHIER Acc</a>
                    <?= getCount('cashier')?>
                </article>
            </div>


            <div class="box">
                <article>
                    <a href="Orderhistory.php">SALES</a>
                    <?= getCount('useracc')?>
                </article>
            </div>
    </div>
</div>        
</body>
</html>


<?php
}else{
    header("Location:adminlogin.php");
    exit();
}
?>

