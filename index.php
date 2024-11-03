<?php 
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>window.open('login.php''_self')</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="./coffeelogo.png" alt="" style="width: 100px; height: auto;" href="./index.php">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./about.php" >About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: #fff; background-color: transparent;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu Items
            </a>

            <!-- product-list -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./men.php">Coffee</a></li>
              <li><a class="dropdown-item" href="./women.php">Snacks</a></li>
              <li><a class="dropdown-item" href="./kid.php">Beverage</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/E-commerce/admin_page/insert.php">Add Items</a>
          </li>
        </ul>

        <!-- Login-button -->
        <a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <!-- <a href="./increment.php"><span id="cart-count" class="text-warning bg-light">0</span></a> -->
        <a href="./logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
        <a href="./register.php"><button type="button" class="btn btn-primary" style="margin: 0 10px">Register</button></a>
        <form class="d-flex" role="search" style="padding: 15px">
          <input class="form-control me-2" type="search" placeholder="   Search Your Mood" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- carousel-image -->
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./coffee1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./coffee2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./coffee3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- carousel-image 2 -->
<div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div style="
            margin: 180px 150px 0px 150px; 
            font-weight: 600; 
            opacity: 0; 
            animation: slideIn 1s forwards;
        ">
          <h2 style="font-weight: bold; font-size: 40px; margin-bottom: 20px;">Welcome to CoffeeCafe</h2>
          <p style="
              font-weight: bold; 
              font-size: 20px; 
              color: #4E3B31;
          ">
            Welcome to Coffeecafe, where every cup tells a story! Enjoy our expertly crafted coffee, cozy atmosphere, and delectable pastries. Whether you're here to relax or work, we have the perfect blend for every moment. Join us for a delightful experience!
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="margin-top: 26px;">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./coffee4.jpg" class="d-block w-100" alt="Coffee">
            </div>
            <div class="carousel-item">
              <img src="./cake1.jpg" class="d-block w-100" alt="Cake">
            </div>
            <div class="carousel-item">
              <img src="./drink1.jpg" class="d-block w-100" alt="Drink">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Inline keyframes -->
  <style>
    @keyframes slideIn {
      0% {
        transform: translateX(100%); /* Start from the right */
        opacity: 0;
      }
      100% {
        transform: translateX(0); /* End at original position */
        opacity: 1;
      }
    }
  </style>

<!-- Add-to-cart -->
<div class="container mt-5">
<h2 style="margin: 0px 0px 20px 10px"><b>Our Delicious</b></h2>
  <div class="card-container">
      <div class="card" style="width: 18rem;">
          <img src="./capp1.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Cappuccino</h5>
              <p class="card-text"><span class="rating" style="display: inline-block; margin-bottom: 10px;">★★★★☆</span><br>
              <!-- <s>Price: $1.91</p></s> -->
              <a href="./capp1.php" class="btn btn-primary">Explore more</a>
          </div>
      </div>
      <div class="card" style="width: 18rem;">
          <img src="./blackcoffee.jpg" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Black Coffee</h5>
              <p class="card-text"><span class="rating" style="display: inline-block; margin-bottom: 10px;">★★★★☆</span><br>
              <!-- <s>Price: $15.43</s></p> -->
              <a href="./women.php" class="btn btn-primary">Explore more</a>
          </div>
      </div>
      <div class="card" style="width: 18rem;">
          <img src="./cheesecake.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Cheese Cake</h5>
              <p class="card-text"><span class="rating" style="display: inline-block; margin-bottom: 10px;">★★★★☆</span><br>
              <!-- <s>Price: $10.11</s></p> -->
              <a href="./kid.php" class="btn btn-primary">Explore more</a>
          </div>
      </div>
      <div class="card" style="width: 18rem;">
          <img src="./mojito.png" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Mojito Cocktail</h5>
              <p class="card-text"><span class="rating" style="display: inline-block; margin-bottom: 10px;">★★★★☆</span><br>
              <!-- <s>Price: $17.20</s></p> -->
              <a href="./men.php" class="btn btn-primary">Explore more</a>
          </div>
      </div>
  </div>
</div>

<!-- footer -->
<!-- <div class="container"> -->
  <footer class="py-5">
    <div class="row">
    <div class="col-6 col-md-2 mb-3" style="color: white;">
        <h5 class="sec-1" >About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="./contact.php" class="nav-link">Contact Us</a></li>
          <li class="nav-item mb-2"><a href="./about.php" class="nav-link">About Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Press</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Corporate Information</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3" style="color: white;"> 
        <h5 class="sec-1">Help</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link">Payment</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Shipping</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Report</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3" style="color: white;">
        <h5 class="sec-1">Consumer Policy</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link">Cancellation & return</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Privacy</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Security</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our Delicious</h5>
          <p>Authentic and Delicious coffee from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>© 2024 CoffeeCafe.com, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
      <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-instagram"></i></a></li>
      <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-twitter"></i></a></li>
      </ul>
    </div>
  </footer>

  <script>
        function incrementQuantity(id) {
            let quantityInput = document.getElementById(`quantity-${id}`);
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
            updateCart();
        }

        function decrementQuantity(id) {
            let quantityInput = document.getElementById(`quantity-${id}`);
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
            updateCart();
        }

        function updateCart() {
            // Logic to update cart total on the page
            // For now, we just log the quantity for debugging purposes
            console.log("Cart updated");
        }
    </script>
<!-- </div> -->
</body>
</html>