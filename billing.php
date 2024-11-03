<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .billing-section {
            justify-content: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            margin: auto;
            text-align: center;
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
    </style>
</head>
<body class="d-flex align-items-center vh-100">
    <!-- Billing Page -->
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
            <span>$<?php echo $row['p_price']; ?></span>
        </div>
        <?php
            }
        } else {
            echo "No Products Available";
        }
        
        $discount = 0.05 * $total_price; // 5% discount
        $delivery_charges = 2.99;
        $gst = $total_price * $gst_rate;
        $overall_total = ($total_price - $discount) + $delivery_charges + $gst;
        ?>
        <hr>
        <div class="billing-item">
            <span>Discount (5%)</span>
            <span>₹<?php echo number_format($discount, 2); ?></span>
        </div>
        <div class="billing-item">
            <span>Delivery Charges</span>
            <span>₹<?php echo number_format($delivery_charges, 2); ?></span>
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
        <button onclick="printBill()" class="btn btn-primary mt-3" style="display:none">Print Bill</button>
    </div>
    <script>
    function printBill() {
            window.print(); // Trigger the print dialog
        }

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('print') === 'true') {
                printBill();
            }
        };
    </script>
</body>
</html>
