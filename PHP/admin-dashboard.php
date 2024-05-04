<!-- 

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

-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

     <!-- Box Icons -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../CSS/admin-dashboard.css">
    <title>POS - DASHBOARD</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="../IMG/logos/nav-logo.png">
            <h1>Holiday Cafe & Souvenir Shop</h1>
        </div>
    </header>

    <?php
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
 
?> 

    <section class="sidebox-1">
        <div class="container">
            <h2>ADMIN PROFILE</h2>
            <img src="profileimg/<?php echo $image; ?>" alt="profile icon">
            <h3>Employee No. <?php echo $empid; ?></h3>
            <a href="#" id="open-admin">See more</a>
        </div>
    </section>

    <section class="sidebox-2">
        <div class="container">
            <ul>
                <li><a href="#" class="active"><i class='bx bxs-dashboard'></i>DASHBOARD</a></li>
                <li><a href="#" id="toggleGraph"><i class='bx bxs-objects-vertical-bottom'></i>GRAPHS</a></li>
                <li><a href="#"><i class='bx bxs-info-circle' ></i>ABOUT</a></li>
              </ul>
        </div>
    </section>

        <section class="buttons">
            <div class="container">
                <a href="#" class="register-btn">CREATE NEW ACCOUNT</a>
                <br>
                <a href="../index.php" class="logout-btn">LOGOUT</a>
            </div>
        </section>
    

    <section class="dashboard">
        <div class="container">
            <h1><i class='bx bxs-dashboard'></i>My Dashboard</h1>

            <div class="main-content">
                <div class="card-1">
                    <a href="useracc.php">Customers</a>
                    <p>  <?= getCount('useracc')?> </p>
                </div>
                <div class="card-1">
                    <a href="adminacc.php">Admins</a>
                    <p> <?= getCount('admin')?> </p>
                </div>
                <div class="card-1">
                    <a href="cashieracc.php">Cashiers</a>
                    <p><?= getCount('cashier')?> </p>
                </div>
                <div class="card-1">
                    <a href="Orderhistory.php">Sales</a>
                    <p> <?= getCount('useracc')?>  </p>
                </div>
            </div>

            <div class="second-content">
                <div class="card-2">
                    <i class='bx bxs-user-pin'></i><br>
                    <a href="#">Customer Profiles</a>
                </div>
                <div class="card-2">
                    <i class='bx bx-cart-add' ></i><br>
                    <a href="#">Add Products</a>
                </div>
                <div class="card-2">
                    <i class='bx bxs-user-circle'></i><br>
                    <a href="#">Admin Profiles</a>
                </div>
                <div class="card-2">
                    <i class='bx bx-history' ></i><br>
                    <a href="#">Sales History</a>
                </div>
            </div>
        </div>
    </section>


        <div class="admin-profile" id="admin-profile">
            <div class="container">
                <span class="close-btn">&times;</span>

                    <div class="admin-profile-container">
                        <h2>ADMIN PROFILE</h2>
                        <img src="profileimg/<?php echo $image; ?>" alt="profile icon">
                    </div>
                    
                <table>
                    <th>ADMIN INFORMATION</th>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Contact No.</td>
                        <td><?php echo $mobile; ?></td>
                    </tr>
                    <tr>
                        <td>Employee ID:</td>
                        <td><?php echo $empid; ?></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>**********</td>
                    </tr>
        
                </table>
                <button class="update-btn">
                <a href="adminacc.php ">Update</a>
                </button>
            </div>
        </div>
    
    <section class = "hidden" id="my-graph">
        <div class="container">
            <div class="chart">
                <div class="bar" style="--bar-height: 90%;" data-sales="January"></div>
                <div class="bar" style="--bar-height: 60%;" data-sales="February"></div>
                <div class="bar" style="--bar-height: 40%;" data-sales="March"></div>
                <div class="bar" style="--bar-height: 70%;" data-sales="April"></div>
                <div class="bar" style="--bar-height: 90%;" data-sales="May"></div>
                <div class="bar" style="--bar-height: 50%;" data-sales="June"></div>
                <div class="bar" style="--bar-height: 75%;" data-sales="July"></div>
                <div class="bar" style="--bar-height: 65%;" data-sales="August"></div>
                <div class="bar" style="--bar-height: 85%;" data-sales="September"></div>
                <div class="bar" style="--bar-height: 55%;" data-sales="October"></div>
                <div class="bar" style="--bar-height: 95%;" data-sales="November"></div>
                <div class="bar" style="--bar-height: 45%;" data-sales="December"></div>
            </div>
            

        </div>

    </section>
</body>
<script src="../JS/admin-dashboard.js"></script>

<!-- Chart JS -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">

</script>

</html>

<!--

<?php
}else{
    header("Location:../index.php");
    exit();
}

?>

-->
