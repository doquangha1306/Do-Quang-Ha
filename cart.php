<?php
session_start();

$products = [
    1 => 'Sách PHP',
    2 => 'Chuột Gaming',
    3 => 'Bàn phím cơ'
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][] = $id;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
</head>
<body>

<h2>Sản phẩm</h2>

<ul>
<?php foreach ($products as $id => $name): ?>
    <li>
        <?php echo $name; ?>
        <a href="?add=<?php echo $id; ?>">Thêm vào giỏ</a>
    </li>
<?php endforeach; ?>
</ul>

<h2>Giỏ hàng</h2>

<ul>
<?php
foreach ($_SESSION['cart'] as $pid) {
    echo "<li>{$products[$pid]}</li>";
}
?>
</ul>

<a href="dashboard.php">Quay lại</a>

</body>
</html>
