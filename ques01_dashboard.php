<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ques01_loginform.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 300px;
            border-radius: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            color: #555;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="ques01_logout.php">Logout</a>
    </div>
</body>
</html>
