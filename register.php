<?php
   include('includes/db_connect.php');
   include('includes/functions.php');
 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = sanitize_input($conn, $_POST['username']);
       $password = hash_password($_POST['password']);
       $role = $_POST['role'];
 
       $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
 
       if (mysqli_query($conn, $query)) {
           header("Location: login.php");
       } else {
           echo "Error: " . mysqli_error($conn);
       }
   }
   ?>





<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 300px;
        }
        
        .container h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
        }
        
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        .form-group button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<script src="bootsrap/js/bootstrap.min.js"></script>

    <div class="container">
        <h2>Registration Form</h2>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
