<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "contact_db"; 


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your message has been submitted.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
