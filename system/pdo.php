<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'perfume_shopdb';

// Create connection 
$conn = new mysqli($host, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');
// Check connection
if ($conn->connect_error) {
    die('Kết nối không thành công: ' . $conn->connect_error);
}
