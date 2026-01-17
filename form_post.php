<form method="POST" action="">
    <input type="text" name="fullname" placeholder="Tên" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng ký</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['fullname']);
    echo "Đã nhận thông tin của: $name";
}
?>