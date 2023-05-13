<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$cardholdername = $_POST['cardholdername'];
$ExpirationDate = $_POST['ExpirationDate'];
$cvv = $_POST['cvv'];
$number = $_POST['number'];
$amount = $_POST['amount'];

$sql = "INSERT INTO test (cardholdername, ExpirationDate, cvv, number, amount)
VALUES ('$cardholdername', '$ExpirationDate', '$cvv', '$number', '$amount')";

if ($conn->query($sql) === TRUE) {
    header("Location: sussful.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
