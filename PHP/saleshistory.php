<?php
include('DBconn.php');
if(!$con){
    die(mysqli_error($con));

}

?>




    
    <link rel="stylesheet" type="text/css" href="../CSS/ACCtable.css">
<div>
    
                <div class="ADD">
                <p><a href="admin-dashboard.php">Go Back</a></p>
                </div>

    <table class="table">
    <thead>
                    <tr>
                    <th> Customers Order</th    >
                    <th scope="col">Order No.</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Address</th>
                  
                    
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                           
                                   


                    
                        '<tr>
                        <td> 
                            <img src="profileimg/ACE.jpg">
                        </td>
                        <td>
                           
                        30

                        </td>
                      
                        
                        <td> Aaron Lacap </td>
                        <td>  ace@gmail.com</td>
                       
                        <td> 09616198257 </td>
                        <td> Pabton 2 Brgy.San Andres Cainta, Rizal</td>
                     
                       
                        <td>
                            <button class="button"> 
                                <a href="useraccdelete.php? deleteid='.$id.'">Delete</a>
                            </button>
                        </td>

                        </tr>';
                         

   

                    </tbody>
  
        </table>



       
   


</div>
