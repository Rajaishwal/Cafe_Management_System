
<!-- Navbar -->
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

<h5><b>My Mood</b></h5>
<hr>

<!-- billing Page -->

<div class="billing-section">
        <div class="billing-header">Billing Summary</div>
        <hr>
        <?php
        include 'dbconnect.php';

        $display_product = mysqli_query($conn, "SELECT * FROM `all_product`");

        $total_price = 0;
        $discount = 0; // Assuming discount is 0
        $delivery_charges = 0;
        $gst_rate = 0.18;

        if(mysqli_num_rows($display_product) > 0){
            while($row = mysqli_fetch_assoc($display_product)){
                $total_price += $row['p_price'];
        ?>
        <div class="billing-item">
            <span><?php echo $row['p_name']; ?></span>
            <span>₹<?php echo $row['p_price']; ?></span>
        </div>
        <?php
            }
        } else {
            echo "No Products Available";
        }
        
        $discount = 10.00;
        $delivery_charges = 40.00;
        $gst = $total_price * $gst_rate;
        $overall_total = ($total_price - $discount) + $delivery_charges + $gst;
        ?>
        <hr>
        <div class="billing-item">
            <span>Discount (5%)</span>
            <span>₹<?php echo $discount = 10.00; ?></span>
        </div>
        <div class="billing-item">
            <span>Delivery Charges</span>
            <span>₹<?php echo $delivery_charges = 40.00; ?></span>
        </div>
        <div class="billing-item">
            <span>GST (18%)</span>
            <span>₹<?php echo number_format($gst, 2); ?></span>
        </div>
        <hr>
        <div class="billing-total">
            <span>Overall Total</span>
            <span>₹<?php echo number_format($overall_total, 2); ?></span>
        </div>
        <hr>
        <button onclick="redirectToBilling()" class="btn btn-primary">Print Bill</button>
    </div>
</div>
<script>
     function redirectToBilling() {
            window.location.href = 'billing.php?print=true';
        }
</script>

<?php
include 'dbconnect.php';

// Corrected query with backticks
$display_product = mysqli_query($conn, "SELECT * FROM `all_product`");

if(mysqli_num_rows($display_product) > 0){
  // logic to fetch data

  while($row = mysqli_fetch_assoc($display_product)){
?>
<!-- Adding cart page And display cart-->

        <form action="#" method="get" class="cart-items">
          <div class="border-round border-success" >
            <div class="row bg-white">
            <div class="col-md-3"> <!-- photo sizing -->
                <img  src="./<?php echo $row['p_image']?>" name="Product_image" alt=<?php echo $row['p_name']?> class="img-fluid">
              </div>
              <div class="col-md-6">
                <h5 class="pt-2" name="product_name"><?php echo $row['p_name']?></h5>
                <small class="text-secondary"></small>
                <h5 class="pt-2" name="product_price">₹<?php echo $row['p_price']?></h5>
                <button type="submit" class="btn btn-warning">Save for Later</button>
                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
              </div>
              <div class="col-md-3" style="margin: 40px 0px 0px 0px;">
                <div>
                  <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                  <input type="text" value="1" class="form-control w-25 d-inline">
                  <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
<?php
  }
}else{
  echo "No Products Available";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
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
    .me-2{
    padding: 0px 250px 0px 0px;
    }
    .py-5{
    background-color: #000;
    color: #fff;
    padding: 2rem;
    margin-top: 800px;
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
.shopping-cart{
  padding: 3% 0;
}
.row{
  margin: 0px 400px 50px 0px;
  padding: 40px 0px 0px 0px;
  /* height: 60px; */
  width: 700px;
}
.border-round{
  border-radius: 10px
}
.container {
            display: flex;
            justify-content: space-between;
        }
        .cart-section {
            width: 60%;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }
        .billing-section {
            width: 35%;
            margin: 0px 0px 0px 970px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position:sticky;
            top: 20px;
        }
        .billing-header {
            font-size: 24px;
            font-weight: bold;
        }
        .billing-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .billing-total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .border-round {
            border-radius: 10px;
        }
        .cart-items {
            margin-bottom: 20px;
        }
        @media print {
        /* Hide everything except the billing section */
        body * {
            visibility: hidden; /* Hide all elements */
        }
        .billing-section, .billing-section * {
            visibility: visible; /* Show only the billing section */
        }
        .billing-section {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    }
    </style>

<!-- footer -->
<footer class="py-5">
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