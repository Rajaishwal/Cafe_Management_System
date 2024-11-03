<?php
include ("dbconnect.php");
global $conn;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['Product_name'];
    // $image = $_FILES['image']['tmp_name'];
    // $imgContent = addslashes(file_get_contents($image));
    $rating = $_POST['Product_price'];
    // $description = $_POST['description'];
    $price = $_POST['Product_image'];

    // Insert image content into database
    $sql = "INSERT INTO product (name,rating,price) VALUES ('$Product_name','$Product_price','$Product_image')";

    if ($conn->query($sql)){
         echo "<script>alert('Added successfully.')</script>";
         echo "<script>window.open('./mens.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
        .nav-link{
           color: #fff;
        }
        .nav-link:hover{
           color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Add Book</h1>
            <form id="addBookForm" method="post" action="product.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" name="rating" id="rating" required>
                </div>
                <!-- <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" required></textarea>
                </div> -->
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" step="0.01" required>
                </div>
                <button type="submit">Add cart</button>
            </form>
        </div>
    </div>
</body>
</html>