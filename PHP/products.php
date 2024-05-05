<?php
include('DBconn.php');
if(!$con){
    die(mysqli_error($con));

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <link rel="stylesheet" type="text/css" href="../CSS/Producttable.css">

    <title>add products template</title>
</head>

                <div class="ADD">
                <p><a href="admin-dashboard.php">BACK ></a></p>
                </div>

<body>
    
    
    <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Product Image</th>
                    <th scope="col">No.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    
                    <th scope="col">Product Category</th>

                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            $sql="SELECT * FROM `products`";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $image = $row['image'];
                                    $id = $row['id'];
                                    $pcategory = $row['pcategory'];
                                    $pprice = $row['pprice'];
                                    $pname = $row['pname'];
                                 
                                   
                                    
                                   


                        echo
                        '<tr>
                        <td>
                            <img src="productimg/'.$image.'" />

                        </td>
                      
                        <td> '.$id.' </td>
                        <td> '.$pname.' </td>
                        <td> '.$pprice.' </td>
                        <td> '.$pcategory.' </td>
                        
                        
                       
                        <td>
                            <button class="button"> 
                                <a href="deleteproduct.php? deleteid='.$id.' ">Delete</a>
                            </button>
                        </td>

                        </tr>';
                             }
                        }
                        ?>

   

                    </tbody>
  
        </table>








</body>
</html>