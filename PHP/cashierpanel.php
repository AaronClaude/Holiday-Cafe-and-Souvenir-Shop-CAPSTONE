
<?php
include 'DBconn.php';
session_start();

if (isset ($_SESSION ['email'] ) && isset ($_SESSION ['password'])){



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe POS System</title>

  <!-- Poppins font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/dashboard-cashier.css">
  
</head>
<body>

<section>
        <nav class="navbar navbar-expand-lg" id="myNavbar">
            <div class="container">
                <img src="../IMG/logos/nav-logo.png" alt="">
                
                <h1>Holiday Cafe & Souvenir Shop</h1>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" id="navLogout" href="logout.php">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container mt-3">
      <div class="row">
        <div class="col-md-8" id="product-section">
          <div class="product-cards row">
            <!-- Product cards will be dynamically added here -->
          </div>
          <input type="text" id="search-input" class="form-control mb-3" placeholder="Search products...">
        </div>
        
        <div class="col-md-4" id="cart-section">
          <div class="add-to-cart">
            <!-- Add to cart section will be dynamically updated here -->
            
          </div>
          <button class="btn btn-danger btn-lg mt-2" id="clear-cart-btn">Clear Cart</button>
          <div class="total mt-4" id="calculation-total">
            <h5>Total:</h5>
            <p>Subtotal: &#8369; <span id="subtotal">0.00</span></p>
            <p>Discount: <span id="discount">0%</span></p>
            <p>Tendered Amount: &#8369;<input type="number" id="tendered" step="0.01"></p>
            <p>Grand Total: &#8369; <span id="grand-total">0.00</span></p>
            <button class="btn btn-secondary btn-lg mt-1" id="complete-sale-btn">Cash</button>
            <button class="btn btn-primary btn-lg mt-1" id="gcash-btn" data-bs-toggle="modal" data-bs-target="#gcashModal">G-Cash</button>
            <button class="btn btn-success btn-lg mt-1" id="paymaya-btn" data-bs-toggle="modal" data-bs-target="#paymayaModal">PayMaya</button>
            
          </div>
          <div class="numpad mt-2">
            <!-- Numpad buttons will be dynamically added here -->
          </div>
        </div>
  
      </div>
    </div>

    <!-- Modal for Clear Cart Confirmation -->
<div class="modal fade" id="clearCartModal" tabindex="-1" aria-labelledby="clearCartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clearCartModalLabel">Clear Cart Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to clear the cart?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-clear-cart-btn">Continue</button>
            </div>
        </div>
    </div>
</div>



    <!-- Modal for G-cash -->
<div class="modal fade" id="gcashModal" tabindex="-1" aria-labelledby="gcashModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="gcashModalLabel">G-cash Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="../IMG/gcash-qr.jpg" alt="G-cash QR Code Placeholder" class="img-fluid mb-3">
          <button class="btn btn-primary btn-lg mt-1" id="received-payment-btn">Received Payment</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for PayMaya -->
  <div class="modal fade" id="paymayaModal" tabindex="-1" aria-labelledby="paymayaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymayaModalLabel">PayMaya Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="../IMG/paymaya-qr.jpg" alt="PayMaya QR Code Placeholder" class="img-fluid mb-3">
          <button class="btn btn-primary btn-lg mt-1" id="received-payment-btn">Received Payment</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Alert container -->
  <div id="alert-container" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11"></div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/dashboard-cashier.js"></script>
  </body>
</html>



<?php
}else{
    header("Location:../index.php");
    exit();
}
?>