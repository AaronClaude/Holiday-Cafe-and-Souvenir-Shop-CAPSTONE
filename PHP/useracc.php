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
                    
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            $result="SELECT * FROM `useracc`";
                            $result=mysqli_query($con,$result);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    
                                    $id = $row['id'];
                                    $uname= $row['uname'];
                                    $email = $row['email'];
                                    $mobile = $row['mobile'];
                                    $password = $row['password'];
                                    $image = $row['image'];
                                   


                        echo
                        '<tr>
                       
                        <td> '.$id.' </td>
                        <td> '.$uname.' </td>
                        <td> '.$email.' </td>
                        <td> '.$mobile.' </td>
                        <td> '.$password.' </td>
                        <td>
                            <img src="profileimg/'.$image.'" />
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
