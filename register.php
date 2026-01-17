<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mã hóa mật khẩu
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([
            ':email' => $email,
            ':password' => $password_hash
        ]);
        $success = "Đăng ký thành công!";
    } catch (PDOException $e) {
        $error = "Email đã tồn tại!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

<h2>Đăng ký</h2>

<?php if (!empty($success)) echo "<p style='color:green'>$success</p>"; ?>
<?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Mật khẩu" required><br><br>
    <button type="submit">Đăng ký</button>
</form>

<a href="login.php">Đăng nhập</a>

</body>
</html>
