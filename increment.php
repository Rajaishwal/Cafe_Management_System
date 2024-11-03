<?php
include 'dbconnect.php';

if (isset($_POST['quantity']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    // Sanitize inputs
    $id = mysqli_real_escape_string($conn, $id);
    $quantity = mysqli_real_escape_string($conn, $quantity);

    // Update the quantity in the database
    $update_query = mysqli_query($conn, "UPDATE `cart` SET `quantity` = '$quantity' WHERE `product_id` = '$id'");

    if ($update_query) {
        // Return success response
        echo json_encode(['status' => 'success']);
    } else {
        // Return error response
        echo json_encode(['status' => 'error']);
    }
}
?>
