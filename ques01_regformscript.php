<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "user_registration";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($mysqli->query($sql) === TRUE) {
    echo "Registration successful. <a href='ques01_loginform.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
