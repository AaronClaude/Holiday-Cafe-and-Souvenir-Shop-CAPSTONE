<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icons (for carousel control icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bebas Neue font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Anton font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="IMG/icons/coffee-cup.png">

    <link rel="stylesheet" href="CSS/styles.css">
    <title>Holiday Cafe & Souvenir Shop</title>
</head>
<body>
        <header>
            <div class="container">
                <a href="#home"><img src="img/logos/nav-logo.png"></a>
                <h1 id="nav-title">Holiday Cafe & Souvenir Shop</h1>
                <nav>

                  <input type="checkbox" id="click">
                  <label for="click" class="menu-mobile-btn">
                    <i class="bi bi-list" id="menu-icon"></i>
                  </label>

                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#featured-products">Products</a></li>
                        <li><a href="#contacts">Contacts</a></li>
                        
                          <div class="dropdown">
                          <button class="dropbtn"><i class="bi bi-person-circle"></i> Account</button>
                          <div class="dropdown-content">
                            <a href="PHP/userlogin.php">User</a>
                            <a href="PHP/adminlogin.php">Admin</a>
                            <a href="PHP/cashierlogin.php">Cashier</a>
                          </div>
                        </div>
                      
                    </ul>
                </nav>

                

            </div>
        </header>
    
<!-- Starting Heading Section-->
<main>
  <section id="home">
    <div class="container" data-aos="fade-right"> 
      <a href="#home"><img src="img/logos/main-logo.png"></a>
      <h2>Memories & treats, every holiday greets.</h2>
      <p>"Coffee, crafts, and holiday cheer, find it all here."</p>
      <a href="" class="btn-3" id="learn-more">Explore Us!</a>
      <a href="" class="btn-3" id="shop-now">Shop Now!</a>
    </div>
  </section>
</main>
<!-- End of Heading Section-->


 <!-- Starting About Us Section -->
  <section id="about-us" class="about-us">
    <div class="container"  data-aos="fade-up">
      <h2>About Us</h2>

      <h3>Our Story</h3>
      <p>Holiday Cafe and Souvenir Shop is a medium-sized company located across the Philippines where staple and seasonal foods and drinks are served. Holiday Cafe and Souvenir Shop is one of the few companies that sells souvenirs and decorations.</p>
      <p>The meaning behind the company name is not far from the type of business itself; its theme and ambiance were based on different types of holidays held in the Philippines and around the world.</p>
      <p>The company was born out of the owner's dream, who loves enjoying holidays. Holiday Cafe and Souvenir Shop offers staple and seasonal foods and drinks for its customers, whether dine-in, take-out, or delivery and pick-up via third-party companies.</p>

      <a href="" class="btn-1">Read more</a>

      <img src="img/about-us.png" data-aos="slide-left">
    </div>
      
  </section>
 <!-- End of About Us Section -->

 <!-- Starting Our Services Section -->
  <section id="services" class="services">
    <div class="container" >
      <h2 data-aos="fade-up">Our Services</h2>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="card" data-aos="flip-right">
            <img src="img/services-1.jpg" class="card-img-top" alt="Service 1 Image">
            <div class="card-body">
              <h5 class="card-title">Fresh Brewed Coffee Beans</h5>
              <p class="card-text">Start your day right with our freshly roasted coffee beans.</p><br>
              <a href="#" class="btn-1">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card" data-aos="flip-right">
            <img src="img/services-2.jpg" class="card-img-top" alt="Service 2 Image">
            <div class="card-body">
              <h5 class="card-title">Tasty Delicacy and Pastries</h5>
              <p class="card-text">Indulge in our selection of mouthwatering pastries and treats.</p><br>
              <a href="#" class="btn-1">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card" data-aos="flip-right">
            <img src="img/services-3.jpg" class="card-img-top" alt="Service 3 Image">
            <div class="card-body">
              <h5 class="card-title">Seasonal Offers Every Holiday!</h5>
              <p class="card-text">Indulge in our rotating array of seasonal offers, tailored for every holiday celebration!</p>
              <a href="#" class="btn-1">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card" data-aos="flip-right">
            <img src="img/services-4.jpg" class="card-img-top" alt="Service 4 Image">
            <div class="card-body">
              <h5 class="card-title">High Quality Souvenirs</h5>
              <p class="card-text">Take a piece of our experience home with our unique and high-quality souvenirs.</p>
              <a href="#" class="btn-1">Learn More</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End of Our Services Section -->

 

  <!-- Start of Featured Product Section -->
  <section id="featured-products">
    <div class="container">
      <h2 data-aos="fade-up">Exclusive Products</h2>
      <p data-aos="fade-up">Explore our curated selection of featured products, carefully chosen to meet the needs and preferences of our customers.</p>
      <div class="row" data-aos="zoom-out-up">
        <div class="col-md-8 mx-auto">
          <div id="productCarousel" class="carousel slide product-card" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="IMG/promo-banner/1.png" class="d-block w-100" alt="Product 1">
              </div>
              <div class="carousel-item">
                <img src="IMG/promo-banner/2.png" class="d-block w-100" alt="Product 2">
              </div>
              <div class="carousel-item">
                <img src="IMG/promo-banner/3.png" class="d-block w-100" alt="Product 3">
              </div>
              <div class="carousel-item">
                <img src="IMG/promo-banner/4.png" class="d-block w-100" alt="Product 4">
              </div>
              <div class="carousel-item">
                <img src="IMG/promo-banner/5.png" class="d-block w-100" alt="Product 5">
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
      <a href="/PHP/userlogin.php" class="btn-1"><i class="bi bi-bag-heart"></i> CHECK OUT NOW!</a>
    </div>
  </section>
  <!-- End of Featured Product Section -->

  
  <!-- Start of Our Product Section -->
  <section id="products">
    <div class="container" data-aos="fade-up">
      <h2>Our Menu</h2>
      <p>Experience the essence of indulgence with our expertly blended coffees, premium teas, delectable pastries, and much more! <a href="">View All</a></p>
    </div>

    <!-- Brewed Coffee -->
  <h3 class="mt-5 product-header" data-aos="fade-up">Brewed Coffee</h3>
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/HOT-COFFEES/original-blend.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Original Blend</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/ICED-COFFEES/cappucino-iced coffee.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Iced Cappucino</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/HOT-COFFEES/caramel-machiato-coffee.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Caramel Machiato</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Other Beverages -->
  <h3 class="mt-5 product-header" data-aos="fade-up">Other Refreshments</h3>
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/HOT-CHOCOLATE/hot-chocolate.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hot Chocolate</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/LEMONADES/blueberry-lemonade.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Blueberry Lemonade</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/LEMONADES/peach-juice.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Peach Juice</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Delicacy and Pastries -->
  <h3 class="mt-5 product-header" data-aos="fade-up">Delicacy and Pastries</h3>
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/PASTA/seafood-pasta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Seafood Pasta</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/SANDWICHES/grilled-beef-sandwich.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Grilled Beef Sandwich</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/PASTRIES/croissant-pastries.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Croissant Bread</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Souvenirs and Decoration -->
  <h3 class="mt-5 product-header" data-aos="fade-up">Souvenirs and Decorations</h3>
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/SOUVENIRS-DECORATIONS/christnas-village-souvenir.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Christmas Village</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/SOUVENIRS-DECORATIONS/heart-keychain-souvenir.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Heart Keychain</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="product-card" data-aos="flip-right">
        <img src="img/menu-products/SOUVENIRS-DECORATIONS/refrigeretor-magnet-2-souvenir.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Refrigerator Magnet</h5>
          <br>
          <a href="/PHP/userlogin.php" class="btn-1">Order Now</a>
        </div>
      </div>
    </div>
  </div>
    <a href="/PHP/userlogin.php" class="btn-2" id="view-more"><i class="bi bi-search-heart-fill"></i> VIEW MORE</a>
</div>

  </section>
 <!-- End of Our Product Section -->

  <!-- Start of Discount Section -->
  <section id="discount-products">
    <div class="container">
      <p class="discount-tagline">Get up to <span id="discount-percent">15% off</span> on our products <span id="discount-percent">every Sunday!</span></p>
      <a href="#" class="btn-4"><i class="bi bi-telephone-fill"></i> CONTACT US!</a>
    </div>
  </section>
  <!-- End of Discount Section -->

  <!-- Start of Contact Section -->
<section id="contacts">
  <div class="container" data-aos="fade-down">
    

      <div class="image">
      </div>
        <div class="form">
          <h2>CONTACT US NOW!</h2>
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
  </div>

</section>

   <!-- End of Contact Section -->



    <!-- Start of Footer Section -->
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

</body>

<!-- Script for bootstrap 5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="JS/main.js"></script>


<!-- AOS Script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>