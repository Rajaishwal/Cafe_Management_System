<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MyShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    .navbar{
    margin-bottom: 10px;
    background-color: rgb(0, 0, 0);
    }
    .py-5{
     margin: 0px 0px 0px 0px;
    }
    .nav-link{
    color: #fff;
    }

    .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
}
.card {
    width: 18rem;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s, box-shadow 0.3s;
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
} 
.card-img-top {
    width: 100%;
    height: 300px;
    object-fit: cover;
}
.card-title {
    font-size: 1.2rem;
    font-weight: bold;
}
.card-text {
    font-size: 1rem;
}
.rating {
    color: #ffd700;
    font-size: 1.2em;
}
    .me-2{
    padding: 0px 250px 0px 0px;
    }
    .py-5{
    background-color: #000;
    color: #fff;
    padding: 2rem;
    margin-top: 50px;
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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
        }
        .contact-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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


<!-- contact -->
<div class="contact-container">
        <h2>Contact Us</h2>
        <form action="contact_us.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>



<!-- footer -->
<footer class="py-5">
    <div class="row">
    <div class="col-6 col-md-2 mb-3" style="color: white;">
        <h5 class="sec-1" >About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="./contact.php" class="nav-link">Contact Us</a></li>
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


