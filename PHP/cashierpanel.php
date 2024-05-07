
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
    <title>CASHIER POS DASHBOARD</title>

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
    <title>CASHIER DASHBOARD</title>

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

        <div class="row" id="myProducts">

          <!-- HOT COFFEE -->
          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/original-blend.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Original Blend Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" data-category="coffee">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/spanish-latte-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Spanish Latte Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/cafe-latte-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Cafe Latte Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center" data-category="coffee">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/cappucino-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Cappucino Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 d-flex align-items-center justify-content-center" data-category="coffee">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/americano-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Americano Coffee</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="250">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/HOT-COFFEES/caramel-machiato-coffee.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Caramel Machiato</h5>
                    <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="250">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- ICED COFFEE-->
        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/ICED-COFFEES/cappucino-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                  <h5 class="card-title">Cappucino Iced Coffee</h5>
                  <p class="card-text">₱ 89.00</p>
                  <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/americano -iced coffe.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Americano Iced Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/hazelnut machiato-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Hazelnut Iced Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/caramel-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Caramel Iced Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/original blend-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Cold Brew Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/latte-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Latte Iced Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/mocha-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Mocha Iced Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="coffee">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/ICED-COFFEES/vanilla-iced coffee.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
                <h5 class="card-title">Vanilla Iced Coffee</h5>
                <p class="card-text">₱ 89.00</p>
                <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>
    </div>

    <div class="row" id="myProducts">
        <!-- HOT CHOCOLATE (REFRESHMENTS) -->
        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/HOT-CHOCOLATE/hot-chocolate.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Hot Chocolate</h5>
                    <p class="card-text">₱ 99.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/HOT-CHOCOLATE/spiced-hot-chocolate.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Spiced Hot Chocolate</h5>
                  <p class="card-text">₱ 99.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
              </div>
          </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/HOT-CHOCOLATE/hot-peppermint-chocolate.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Peppermint Chocolate</h5>
                    <p class="card-text">₱ 99.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
      </div>

      <!-- FRUIT TEAS -->
      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/LEMONADES/strawberry-lemonade.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Strawberry Lemonade</h5>
                  <p class="card-text">₱ 89.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/LEMONADES/blueberry-lemonade.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Blueberry Lemonade</h5>
                    <p class="card-text">₱ 99.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="99">Add to Cart</button>
                </div>
            </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/LEMONADES/raspberry-lemonade.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Raspberry Lemonade</h5>
                  <p class="card-text">₱ 89.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/LEMONADES/peach-juice.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Peach Juice</h5>
                  <p class="card-text">₱ 89.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/LEMONADES/apricot-juice.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Apricot Juice</h5>
                    <p class="card-text">₱ 89.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
                </div>
            </div>
      </div>

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="refreshments">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/LEMONADES/mango-juice.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Mango Juice</h5>
                  <p class="card-text">₱ 89.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
      </div>

    </div>
      
    <div class="row" id="myProducts">
        <!-- Pasta (DELICACIES)-->
      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/PASTA/lasagna-pasta.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Lasagna Pasta</h5>
                    <p class="card-text">₱ 89.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
                </div>
            </div>
        </div>
      

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/PASTA/seafood-pasta.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Seafood Pasta</h5>
                  <p class="card-text">₱ 89.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
      </div>
    

    <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
      <div class="card cardProducts">
          <img src="../IMG/menu-products/PASTA/special-spaghetti-pasta.jpg" class="card-img-top" alt="Placeholder Image">
            <div class="card-body text-center">
              <h5 class="card-title">Special Spaghetti</h5>
                <p class="card-text">₱ 89.00</p>
                  <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
            </div>
        </div>
      </div>
   

      <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
        <div class="card cardProducts">
            <img src="../IMG/menu-products/PASTA/carbonara-pasta.jpg" class="card-img-top" alt="Placeholder Image">
              <div class="card-body text-center">
                <h5 class="card-title">Carbonara Pasta</h5>
                  <p class="card-text">₱ 89.00</p>
                    <button class="btn btn-primary add-to-cart" data-price="89">Add to Cart</button>
              </div>
          </div>
        </div>
        
      <div class="row" id="myProducts">
        <!-- SANDWICHES -->
        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/SANDWICHES/ham-egg-sandwich.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Ham and Egg Sandwich</h5>
                    <p class="card-text">₱ 59.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="59">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/SANDWICHES/grilled-beef-sandwich.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Grilled Beef Sandwich</h5>
                      <p class="card-text">₱ 59.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="59">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
              <div class="card cardProducts">
                  <img src="../IMG/menu-products/SANDWICHES/bacon-and-egg-sandwich.jpg" class="card-img-top" alt="Placeholder Image">
                    <div class="card-body text-center">
                      <h5 class="card-title">Bacon and Egg Sandwich</h5>
                        <p class="card-text">₱ 89.00</p>
                          <button class="btn btn-primary add-to-cart" data-price="59">Add to Cart</button>
                    </div>
                </div>
              </div>

              <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="delicacies">
                <div class="card cardProducts">
                    <img src="../IMG/menu-products/SANDWICHES/vegetarian-sandwich.jpg" class="card-img-top" alt="Placeholder Image">
                      <div class="card-body text-center">
                        <h5 class="card-title">Vegetarian Sandwich</h5>
                          <p class="card-text">₱ 59.00</p>
                            <button class="btn btn-primary add-to-cart" data-price="59">Add to Cart</button>
                      </div>
                  </div>
                </div>
      </div>
      

        <div class="row" id="myProducts">
          <!-- PASTRIES -->
          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/PASTRIES/croissant-pastries.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Croissant Bread</h5>
                      <p class="card-text">₱ 69.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="69">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
              <div class="card cardProducts">
                  <img src="../IMG/menu-products/PASTRIES/muffin-pastries.jpg" class="card-img-top" alt="Placeholder Image">
                    <div class="card-body text-center">
                      <h5 class="card-title">Muffin Bread</h5>
                        <p class="card-text">₱ 69.00</p>
                          <button class="btn btn-primary add-to-cart" data-price="69">Add to Cart</button>
                    </div>
                </div>
              </div>

              <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
                <div class="card cardProducts">
                    <img src="../IMG/menu-products/PASTRIES/cream-puff-pastries.jpg" class="card-img-top" alt="Placeholder Image">
                      <div class="card-body text-center">
                        <h5 class="card-title">Cream Puff Bread</h5>
                          <p class="card-text">₱ 69.00</p>
                            <button class="btn btn-primary add-to-cart" data-price="69">Add to Cart</button>
                      </div>
                  </div>
                </div>
        

        <!-- SLICED CAKE -->
        <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
          <div class="card cardProducts">
              <img src="../IMG/menu-products/CAKE-SLICES/sansrival-cake.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Sans Rival Cake</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
            <div class="card cardProducts">
                <img src="../IMG/menu-products/CAKE-SLICES/chocolate-cake.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Chocolate Cake</h5>
                      <p class="card-text">₱ 109.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                  </div>
              </div>
            </div>
          
            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
              <div class="card cardProducts">
                  <img src="../IMG/menu-products/CAKE-SLICES/cheesecake-cake.jpg" class="card-img-top" alt="Placeholder Image">
                    <div class="card-body text-center">
                      <h5 class="card-title">Cheese Cake</h5>
                        <p class="card-text">₱ 109.00</p>
                          <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                    </div>
                </div>
              </div>

              <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
                <div class="card cardProducts">
                    <img src="../IMG/menu-products/CAKE-SLICES/red-velvet-cake.jpg" class="card-img-top" alt="Placeholder Image">
                      <div class="card-body text-center">
                        <h5 class="card-title">Red Velvet Cake</h5>
                          <p class="card-text">₱ 109.00</p>
                            <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                      </div>
                  </div>
                </div>

                <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="pastries">
                  <div class="card cardProducts">
                      <img src="../IMG/menu-products/CAKE-SLICES/tiramisu-cake.jpg" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body text-center">
                          <h5 class="card-title">Tiramisu Cake</h5>
                            <p class="card-text">₱ 109.00</p>
                              <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                        </div>
                    </div>
                  </div>
          
          <div class="row" id="myProducts">
            <!-- Seasonal Drinks -->

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal">
              <div class="card cardProducts">
                  <img src="../IMG/menu-products/SEASONAL-REFRESHMENTS/panettone latte(christnas)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                    <div class="card-body text-center">
                      <h5 class="card-title">Panettone Latte</h5>
                        <p class="card-text">₱ 119.00</p>
                          <button class="btn btn-primary add-to-cart" data-price="119">Add to Cart</button>
                    </div>
                </div>
              </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
                <div class="card cardProducts">
                  <img src="../IMG/menu-products/SEASONAL-REFRESHMENTS/pumpkin latte(halloween).jpg" class="card-img-top" alt="Placeholder Image">
                    <div class="card-body text-center">
                      <h5 class="card-title">Pumpkin Latte</h5>
                        <p class="card-text">₱ 119.00</p>
                          <button class="btn btn-primary add-to-cart" data-price="119">Add to Cart</button>
                    </div>
                </div>
              </div>
           

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SEASONAL-REFRESHMENTS/ginger bread latte(christmas)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Ginger-Bread Latte</h5>
                      <p class="card-text">₱ 119.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="119">Add to Cart</button>
                  </div>
              </div>
            </div>
          

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SEASONAL-REFRESHMENTS/sparkling cranberry punch latte(new year eve)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Sparkling Cranberry</h5>
                      <p class="card-text">₱ 119.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="119">Add to Cart</button>
                  </div>
              </div>
            </div>

          <!-- Seasonal Foods -->
          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
            <div class="card cardProducts">
              <img src="../IMG/menu-products/SEASONAL-MEALS/king cake(mardi gras)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">King Cake Mardi Gras</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
            <div class="card cardProducts">
              <img src="../IMG/menu-products/SEASONAL-MEALS/santa's chipper cake(christmas)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Santa's Chipper Cake</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
            <div class="card cardProducts">
              <img src="../IMG/menu-products/SEASONAL-MEALS/baked cheesy salmon with sliced slime(lenten)-seasonal .jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Baked Cheesy salmon</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
            <div class="card cardProducts">
              <img src="../IMG/menu-products/SEASONAL-MEALS/heart shaped cookies(valentines)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Heart Shaped Cookies</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
            <div class="card cardProducts">
              <img src="../IMG/menu-products/SEASONAL-MEALS/pumplin csoup(hallooween)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Pumpkin Soup</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="seasonal"> 
            <div class="card cardProducts">
              <img src="../IMG/menu-products/SEASONAL-MEALS/pau au chocolate(valentines)-seasonal.jpg" class="card-img-top" alt="Placeholder Image">
                <div class="card-body text-center">
                  <h5 class="card-title">Pau Au Chocolat</h5>
                    <p class="card-text">₱ 109.00</p>
                      <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                </div>
            </div>
          </div>

          <div class="row" id="myProducts">
            <!-- SOUVENIRS AND DECORATIONS -->
            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/christnas-village-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Christmas Village</h5>
                      <p class="card-text">₱ 140.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="140">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/christmas-lantern-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Christmas Lantern</h5>
                      <p class="card-text">₱ 125.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="125">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/ginger-bread-house-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Ginger Bread House</h5>
                      <p class="card-text">₱ 103.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="103">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/easter-egg-kit-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Easter Egg Kit</h5>
                      <p class="card-text">₱ 100.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="100">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/pumpkin-and-maple-light-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Pumpkin & Maple Lights</h5>
                      <p class="card-text">₱ 109.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="109">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/keychain-coffee-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Keychain Coffee</h5>
                      <p class="card-text">₱ 45.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="45">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/refrigerator-magnet-1-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Ref Magnets</h5>
                      <p class="card-text">₱ 59.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="59">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/refrigeretor-magnet-2-souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Ref Magnets</h5>
                      <p class="card-text">₱ 59.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="59">Add to Cart</button>
                  </div>
              </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center"  data-category="souvenirs"> 
              <div class="card cardProducts">
                <img src="../IMG/menu-products/SOUVENIRS-DECORATIONS/gift-basket-with-local-candies-and-chocolates-holiday- souvenir.jpg" class="card-img-top" alt="Placeholder Image">
                  <div class="card-body text-center">
                    <h5 class="card-title">Gift Baskets</h5>
                      <p class="card-text">₱ 125.00</p>
                        <button class="btn btn-primary add-to-cart" data-price="125">Add to Cart</button>
                  </div>
              </div>
            </div>


          </div>
          </div>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="../JS/dashboard-cashier.js"></script>

    <!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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


    <section>
    <div class="container my-5">
        
        <div class="row">

        <!-- Product Categories Section -->
        <section class="product-category">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                        <h2>Hello Cashier!</h2>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="../JS/dashboard-cashier.js"></script>

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