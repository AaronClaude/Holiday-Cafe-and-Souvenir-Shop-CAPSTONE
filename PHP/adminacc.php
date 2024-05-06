<?php
include('DBconn.php');
if(!$con){
    die(mysqli_error($con));

}

?>



    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="../CSS/ACCtable.css">
<div>
    
                <div class="ADD">
                <p><a href="admin-dashboard.php">Go Back?</a></p>
                </div>

    <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Empolyee ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            $sql="SELECT * FROM `admin`";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $image = $row['image'];
                                    $empid = $row['empid'];
                                    $email = $row['email'];
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $mobile = $row['mobile'];
                                    $address = $row['address'];
                                    $password = $row['password'];
                                    
                                   


                        echo
                        '<tr>
                        <td>
                            <img src="profileimg/'.$image.'" />

                        </td>
                      
                        <td> '.$empid.' </td>
                        <td> '.$email.' </td>
                        <td> '.$fname.' </td>
                        <td> '.$lname.' </td>
                        <td> '.$mobile.' </td>
                        <td> '.$address.' </td>
                        <td> '.$password.' </td>
                        
                       
                        <td>
                        <button class="button"> 
                                <a href="adminupdate.php? updateempid='.$empid.' ">Update</a>
                            </button>
                        </td>
                        <td>
                            <button class="button"> 
                                <a href="adminaccdelete.php? deleteid='.$empid.' ">Delete</a>
                            </button>
                        </td>

                        </tr>';
                             }
                        }
                        ?>

   

                    </tbody>
  
        </table>



       
   


</div>
