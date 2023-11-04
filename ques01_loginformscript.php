<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "user_registration";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $mysqli->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Successful login, set session variables or cookies
        session_start();
        $_SESSION['username'] = $row['username'];
        header("Location: ques01_dashboard.php");
    } else {
        echo "Incorrect password. <a href='ques01_loginform.html'>Try again</a>";
    }
} else {
    echo "User not found. <a href='ques01_regform.html'>Register here</a>";
}

$mysqli->close();
?>
