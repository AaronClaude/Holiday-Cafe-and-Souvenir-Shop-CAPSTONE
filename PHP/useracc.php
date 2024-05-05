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
                    <th scope="col">Profile Picture</th>
                    <th scope="col">No.</th>
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
                            $result="SELECT * FROM `useracc`";
                            $result=mysqli_query($con,$result);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    
                                    $image = $row['image'];
                                    $id = $row['id'];
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
                      
                        <td> '.$id.' </td>
                        <td> '.$email.' </td>
                        <td> '.$fname.' </td>
                        <td> '.$lname.' </td>
                        <td> '.$mobile.' </td>
                        <td> '.$address.' </td>
                        <td> '.$password.' </td>
                        <td>
                        <button class="button"> 
                                <a href="adminupdate.php? updateid='.$id.' ">Update</a>
                            </button>
                        </td>
                        <td>
                            <button class="button"> 
                                <a href="useraccdelete.php? deleteid='.$id.'">Delete</a>
                            </button>
                        </td>

                        </tr>';
                             }
                        }
                        ?>

   

                    </tbody>
  
        </table>



       
   


</div>
