
<?php
session_start();
include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Shopcart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
            margin-right: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .success {
            color: green;
            font-size: 14px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0f1111;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to Shopcart</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
            <?php
            if (isset($_SESSION['success_message'])) 
            // {
                echo '<p class="success">' . $_SESSION['success_message'] . '</p>';?>
            <script>
            document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();

            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;

            fetch('login_process.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password)
            })
            .then(response => response.json())
            .then(data => {
                let responseMessage = document.getElementById('response-message');
                if (data.status === 'success') {
                    alert("Success")
                    responseMessage.classList.remove('error');
                    responseMessage.classList.add('success');
                    responseMessage.textContent = data.message;
                    setTimeout(() => {
                        window.location.href = 'index.php';
                    }, 1000);
                    
                } else {
                    responseMessage.classList.remove('success');
                    responseMessage.classList.add('error');
                    responseMessage.textContent = data.message;
                }
            })
            .catch(error => console.error('Error:', error));
        });
            </script>
           
        </form>
    </div>
</body>
</html>

