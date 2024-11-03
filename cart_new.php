<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = 1; // default quantity

    // Insert into cart table
    $insert_query = "INSERT INTO all_product (p_name, p_price, p_rating, p_image) VALUES ('$product_name', $product_price, '$product_rating', '$product_image')";
    
    if (mysqli_query($conn, $insert_query)) {
        echo "Item added to cart successfully!";
        header("Location: cart.php"); // Redirect to cart page
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
