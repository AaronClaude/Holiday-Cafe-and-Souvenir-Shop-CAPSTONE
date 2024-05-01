<?php
include('DBconn.php');
if(!$con){
    die(mysqli_error($con));

}

?>




    
    <link rel="stylesheet" type="text/css" href="../CSS/ACCtable.css">
<div>
    
                <div class="ADD">
                <p><a href="ADMNPanel.php">BACK ></a></p>
                </div>

    <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Empolyee ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Password</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            $sql="SELECT * FROM `admin`";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                   
                                    $empid = $row['empid'];
                                    $email = $row['email'];
                                    $mobile = $row['mobile'];
                                    $password = $row['password'];
                                    $image = $row['image'];
                                   


                        echo
                        '<tr>
                      
                        <td> '.$empid.' </td>
                        <td> '.$email.' </td>
                        <td> '.$mobile.' </td>
                        <td> '.$password.' </td>
                        <td>
                            <img src="profileimg/'.$image.'" />

                        </td>
                       
                        <td>
                            <button class="button"> 
                                <a href="adminaccdelete.php? deleteid='.$empid.'">Delete</a>
                            </button>
                        </td>

                        </tr>';
                             }
                        }
                        ?>

   

                    </tbody>
  
        </table>



       
   


</div>
