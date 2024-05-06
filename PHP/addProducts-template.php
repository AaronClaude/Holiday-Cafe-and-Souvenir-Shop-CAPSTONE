<?php

include 'DBconn.php';
if(isset($_POST['submit'])&& isset($_FILES['image'])){
  $pname = $_POST['pname'];
  $pprice = $_POST['pprice'];
  $pcategory = $_POST['pcategory'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $folder = 'productimg/'.$image;
  
  $sql = mysqli_query($con,"INSERT INTO `products`(pname,pprice,pcategory,image) values ('$pname','$pprice','$pcategory','$image')");
  if(move_uploaded_file($tmp_name,$folder)){
    echo "<h2>Product Added</h2>";
  }else{
    die(mysqli_error($con));
  }

}

?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    
     <!-- Poppins font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../CSS/Producttable.css">

    <title>add products template</title>

                
</head>
<div class="ADD">
                <p style="margin: 5px;"><a href="admin-dashboard.php">Go back</a></p>
                </div>
<body>
                
    
<section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Add Product
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="pname" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Price</label>
                                <input type="number" class="form-control" id="productPrice" name="pprice" required>
                            </div>
                            <div class="mb-3">
                                <label for="productCategory" class="form-label">Category</label>
                                <select class="form-select" id="productCategory" name="pcategory" required>
                                    <option value="">Select a category</option>
                                    <option value="Coffee">Coffee</option>
                                    <option value="Seasonal/Special">Seasonal/Special</option>
                                    <option value="Refreshments">Refreshments</option>
                                    <option value="Delicacies">Delicacies</option>
                                    <option value="Pastries">Pastries</option>
                                    <option value="Souvenirs">Souvenirs</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="productImage" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" name="submit" class="add-btn">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>