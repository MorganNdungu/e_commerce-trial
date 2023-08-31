<?php
   session_start();
   if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
       header("Location: login.php");
       exit();
   }
 
   // Your admin dashboard content here
   echo "Welcome, Admin!";
   ?>




<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>

    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 40px);
        }
        
        .admin-panel {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 300px;
        }
        
        .admin-panel h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .admin-link {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #007BFF;
        }
        
        .admin-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">

    <div class="header">
        <h1>Admin Page</h1>
    </div>
    <div class="container">
        <div class="admin-panel">
            <h2>Welcome, Admin!</h2>
            <a class="dashboard.php" href="#">Dashboard</a>
            <a class="#" href="#">Users</a>
            <a class="#" href="#">Log Out</a>
        </div>
    </div>
</body>
</html>
