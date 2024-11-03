<?php
include 'dbconnect.php';
global $conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Add_Product.php'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_image = mysqli_real_escape_string($conn, $_POST['product_image']);

    // Insert product details into the cart table
    $sql = "INSERT INTO 'product' (Product_name, Product_price, Product_image) VALUES ('$product_name', '$product_price', '$product_image')";

    if ($conn->query($sql)) {
        echo "<script>alert('Product added to cart successfully.');</script>";
        echo "<script>window.open('index.php', '_self');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
