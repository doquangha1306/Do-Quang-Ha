<?php
$host = '127.0.0.1';   // dùng IP, KHÔNG dùng localhost
$port = '3307';        // <<< QUAN TRỌNG
$dbname = 'buoi2_php';
$username = 'root';
$password = '';

try {
    $conn = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("LỖI KẾT NỐI DB: " . $e->getMessage());
}
