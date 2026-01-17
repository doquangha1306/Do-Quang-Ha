<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h2>Xin chào, <?php echo $_SESSION['user']; ?></h2>

<a href="logout.php">Đăng xuất</a><br><br>
<a href="cart.php">Xem giỏ hàng</a>

</body>
</html>
