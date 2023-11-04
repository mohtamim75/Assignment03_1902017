<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bdu";

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$name = $_POST['name'];
$email = $_POST['email'];

// SQL query to insert the user's information into the "users" table
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    $confirmationMessage = "User information has been successfully saved!";
} else {
    $confirmationMessage = "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alert</title>
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
        <?php if (!empty($confirmationMessage)) { ?>
        <p><?php echo $confirmationMessage; ?></p>
        <?php } ?>
    </div>
</body>
</html>