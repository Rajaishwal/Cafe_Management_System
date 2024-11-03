<?php
function add_product(){
    global $conn;
    // if(isset($_GET['p_id'])){
        $sql = "SELECT * FROM all_product";
        $result = $conn->query($sql);
}
?>
<?php
// Include database connection
include('dbconnect.php');
session_start();

// SQL query to fetch all books
$sql = "SELECT * FROM all_product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background: url('./resource/your_background_image.jpg') no-repeat center center fixed; */
            background-size: cover;
            background-color: #e08b8b;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px; 
            display: inline-block;
            vertical-align: top;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            /* background-color: rgba(255, 255, 255, 0.9); */
            background-color: #cca3a3;
            /* overflow: hidden; */
        }

        .card img {
             max-width: 100%;
            height: auto;
            border-radius: 5px; 
            
        }

        .card-content {
            padding: 10px 0;
            font-size: 15px;
            height: calc(100% - 50px); /* Height of the card minus the image height and padding */
        overflow-y: auto; /* Allow vertical scrolling */
             
        }

        .card-content h2 {
            margin-top: 0;
            font-size: 20px;
            font-weight: bold;

        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container button {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            background-color:#6e2323;
            color: white;
        }

        .btn-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1 class="text-center mt-4">List of Books</h1>
    <div class="card-container text-center">
        <?php
        // Check if there are any books
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                
                $product_image = base64_encode($row['p_image']);
                $imageSrc = 'data:image/jpeg;base64,' . $product_image;
                
                echo '<img src="' . $imageSrc . '" alt="' . htmlspecialchars($row['p_name']) . '">';
                echo '<div class="card-content">';
                echo '<h2>' . htmlspecialchars($row['p_name']) . '</h2>';
                echo '<p><strong>Price:</strong> ' . htmlspecialchars($row['p_price']) . '</p>';
                echo '<p><strong>Rating:</strong> ' . htmlspecialchars($row['p_rating']) . '</p>';
                // echo '<p><strong>Price:</strong> ' . htmlspecialchars($row['PRICE']) . '</p>';
                echo '<div class="btn-container">';
                // echo '<button onclick="location.href=\'message.php?book_id=' . $row['p_id'] . '\'">Message</button>';
                // echo '<button onclick="location.href=\'rating.php?book_id=' . $row['p_id'] . '\'">Review</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No books found.</p>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  
