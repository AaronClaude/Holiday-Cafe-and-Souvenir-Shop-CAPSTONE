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
    <title>CASHIER POS</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Poppins Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bebas Neue font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="IMG/icons/coffee-cup.png">

    <link rel="stylesheet" href="../CSS/dashboard-user.css">
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
                            <a class="nav-link active"  href="dashboard-user.html">Products</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" id="homeLink" href="index.html">Home</a>
                        </li>

                        <button class="btn btn-primary ms-3" id="openCartBtn">
                            <i class="bi bi-cart-fill"></i> Your Cart
                        </button>

                        <li class="nav-item">
                            <a class="nav-link" id="navLogout" href="logout.php">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Start of Featured Product Section -->
  <section id="featured-products">
    <div class="container">
      <h2>Exclusive Products</h2>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div id="productCarousel" class="carousel slide product-card" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../IMG/promo-banner/1.png" class="d-block w-100" alt="Product 1">
              </div>
              <div class="carousel-item">
                <img src="../IMG/promo-banner/2.png" class="d-block w-100" alt="Product 2">
              </div>
              <div class="carousel-item">
                <img src="../IMG/promo-banner/3.png" class="d-block w-100" alt="Product 3">
              </div>
              <div class="carousel-item">
                <img src="../IMG/promo-banner/4.png" class="d-block w-100" alt="Product 4">
              </div>
              <div class="carousel-item">
                <img src="../IMG/promo-banner/5.png" class="d-block w-100" alt="Product 5">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Featured Product Section -->

    <section>
    <div class="container my-5">
        
        <div class="row">

        <!-- Product Categories Section -->
        <section class="product-category">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                        <h2>Categories</h2>
                        <div class="d-flex justify-content-center" id="category-box">
                            <a href="#" class="category-link mx-2" data-category="coffee">COFFEES</a>
                            <a href="#" class="category-link mx-2" data-category="seasonal">SEASONAL SPECIALS</a>
                            <a href="#" class="category-link mx-2" data-category="refreshments">REFRESHMENTS</a>
                            <a href="#" class="category-link mx-2" data-category="delicacies">DELICACIES</a>
                            <a href="#" class="category-link mx-2" data-category="pastries">PASTRIES</a>
                            <a href="#" class="category-link mx-2" data-category="souvenirs">SOUVENIRS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <div class="productList">
            <a href="dashboard-user.html"><h1>All Products</h1></a>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="coffee">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/original-blend.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Original Blend Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="coffee">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/spanish-latte-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Spanish Latte Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="coffee">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/cafe-latte-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Cafe Latte Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="coffee">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/cappucino-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Cappucino Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="coffee">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/americano-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Americano Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="coffee">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/caramel-machiato-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Caramel Machiato</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="refreshments">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/caramel-machiato-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Caramel Machiato</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="refreshments">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/HOT-CHOCOLATE/hot-chocolate.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Hot Chocolate</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="refreshments">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/LEMONADES/apricot-juice.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Apricot Juice</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="refreshments">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/LEMONADES/blueberry-lemonade.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Blueberry Lemonade</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" id="myProducts" data-category="refreshments">
            <div class="card" id="cardProducts">
                <img src="../IMG/menu-products/LEMONADES/mango-juice.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Mango Juice</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>


        </div>
    </div>
</section>

    <div class="cart-sidebar" id="cartSidebar">
        <div class="card">
            <div class="card-header d-flex justify-content-between"> <!-- Adjusted class and added flex utility classes -->
                <span><i class="bi bi-cart-fill"></i> Shopping Cart</span> <!-- Moved text inside span for better styling -->
                <button type="button" class="btn-close btn-close-black" aria-label="Close" id="closeCartBtn"></button> <!-- Added close button -->
            </div>
            
            <div class="card-body">
                <ul class="list-group cart-list">
                    <!-- Cart items will be appended here -->
                </ul>
            </div>
            <div class="card-footer">
                <p id="total-price">Total: ₱<span id="cart-total">0</span></p>
            </div>
            <div class="card-footer">
                <button class="btn btn-danger clear-cart" id="clearBtn">Clear</button>
                <button class="btn btn-primary checkout" id="checkoutBtn">Checkout</button>
            </div>
        </div>
    </div>
    

  <!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Checkout form -->
          <form id="checkoutForm">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <textarea class="form-control" id="address" required></textarea>
            </div>
            <div class="mb-3">
              <label for="paymentMethod" class="form-label">Payment Method</label>
              <select class="form-select" id="paymentMethod" required>
                <option value="" selected disabled>Select Payment Method</option>
                <option value="cash">Cash</option>
                <option value="gcash">G Cash</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  

<!-- Receipt Modal -->
<div class="modal fade" id="receiptModal" tabindex="-1" aria-labelledby="receiptModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="receiptModalLabel">Receipt</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Receipt content -->
              <div class="row">
                  <div class="col-6">
                      <div class="receipt-header">
                          <h4>Receipt</h4>
                          <p>Customer: <span id="customerName"></span></p>
                          <p>Payment Method: <span id="paymentMethod"></span></p>
                      </div>
                  </div>
                  <div class="col-6">
                      <ul class="list-group mb-3" id="receiptProductList">
                          <!-- Products will be appended here -->
                      </ul>
                  </div>
              </div>
              <hr>
              <div class="receipt-footer">
                  <p class="total">Total: <span id="totalPrice"></span></p>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

  

  

    <footer>
        <div class="container">
          <p>&copy; 2024 Holiday Cafe and Souvenir Shop. All rights reserved.</p>
          <div class="footer-icons">
            <a href=""><i class='bx bxl-facebook-circle bx-md' id="fb-icon"></i></a>
            <a href=""><i class='bx bxl-youtube bx-md' id="yt-icon"></i></a>
            <a href=""><i class='bx bxl-instagram-alt bx-md' id="ig-icon"></i></a>
          </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="../JS/dashboard-user.js"></script>

    <!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>



<?php
}else{
    header("Location:../index.php");
    exit();
}
?>