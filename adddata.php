<?php
$temp = $_GET['temp'];

$servername = "http://52.221.232.122";
$username = "root";
$password = "0909533094";
$dbname = "sbfram";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$val = $_GET['temp'];
$sql = "INSERT INTO esp8266(temp) VALUES ($val);";

if ($conn->query($sql) === TRUE) {
    echo "save OK";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>