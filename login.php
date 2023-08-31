<?php
   session_start();
   include('includes/db_connect.php');
   include('includes/functions.php');
 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = sanitize_input($conn, $_POST['username']);
       $password = $_POST['password'];
 
       $query = "SELECT * FROM users WHERE username='$username'";
       $result = mysqli_query($conn, $query);
       $row = mysqli_fetch_assoc($result);
 
       if ($row && password_verify($password, $row['password'])) {
           $_SESSION['user_id'] = $row['id'];
           $_SESSION['role'] = $row['role'];
 
           if ($row['role'] === 'admin') {
               header("Location: dashboard.php");
           } else {
               // Redirect to appropriate buyer/seller page
           }
       } else {
           echo "Invalid credentials.";
       }
   }
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Responsive styles */
@media (max-width: 400px) {
    .login-container {
        width: 90%;
    }
}

    </style>
</head>
<body>
<script src="bootsrap/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Form</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <a href="register.php">Register</a>
        </form>
    </div>
</body>
</html>

</body>
</html>