<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CoffeeCafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
     body {
            overflow-x: hidden; /* Prevent horizontal scroll */
        }  
    .navbar{
    margin-bottom: 10px;
    background-color: rgb(0, 0, 0);
    }
    .nav-link{
    color: #fff;
    }
    .me-2{
    padding: 0px 250px 0px 0px;
    }
    .py-5{
    background-color: #000;
    color: #fff;
    }
    .sec-1{
    padding: 0px 0px 0px 16px;
    }
    .fa-solid{
    color: white;
    padding: 0px 35px 0px 0px;
    margin: 0px 0px 0px 0px;
    font-size: 24px;
    transition: transform 0.3s, box-shadow 0.3s;
}
.fa-solid:hover{
    transform: translate(5px) scale(0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);   
}
.btn{
    display: inline;
    transition: transform 0.3s, box-shadow 0.3s;
}
.btn:hover{
    transform: translate(5px) scale(0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.nav-link{
    color: #fff;
}
.nav-link:hover{
    color: #fff;
}
body {
            overflow-x: hidden; /* Prevent horizontal scroll */
        }
        

    </style>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
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


<!-- <main> -->

  <!-- <section class="py-5 text-center container"> -->
    <div class="row py-lg-5 justify-content-center align-items-center" style="background-color: #000; color: #fff; padding: 100px 0; min-height: 400px;" >
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="padding: 0px 0px 0px 250px; margin: 0px 0px 30px 0px">About Us</h1>
        <p class="lead text-body-secondary" style="color: #fff  !important;">Shop-cart Culture
        Shopcart culture is steeped in fostering trust, inclusion, support, recognition and genuine care that enables Flipsters to create, innovate, and bring their best selves to work.</p>
      </div>
    </div>

  <!-- image-boxes -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin: 16px 0px 0px 0px;">
      <div class="col">
          <div class="card shadow-sm">
          <img src="./kid1.jpg " class="bd-placeholder-img card-img-top" width="100%" height="295" alt="Thumbnail">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-center">
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
          <p class="card-text" style="margin: 0px 0px 100px 0px">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        
        <div class="col" style="margin: 400px 0px 0px 505px;">
          <div class="card shadow-sm">
          <img src="your-image-url-3.jpg" class="bd-placeholder-img card-img-top" width="100%" height="295" alt="Thumbnail">
            <div class="card-body">
    
              <div class="d-flex justify-content-between align-items-center">
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>

        <div class="col" style="margin: 80px 0px 0px 0px;">
          <div class="card shadow-sm">
          <img src="your-image-url-3.jpg" class="bd-placeholder-img card-img-top" width="100%" height="295" alt="Thumbnail">
              
              <div class="d-flex justify-content-between align-items-center">
                <!-- <small class="text-body-secondary">9 mins</small> -->
              </div>
            </div>
          </div>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>

        
<!-- footer -->
<footer class="py-5" style="padding: 1rem; margin-top: 40px;!important">
    <div class="row">
    <div class="col-6 col-md-2 mb-3" style="color: white;">
        <h5 class="sec-1" >About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link">Contact Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">About Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link">Careers</a></li>
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