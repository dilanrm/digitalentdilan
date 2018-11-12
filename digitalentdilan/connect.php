<?php
$servername = "u194943051_dbhos";
$username = "u194943051_kuuni";
$password = "password";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
