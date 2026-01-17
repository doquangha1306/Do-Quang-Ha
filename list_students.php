<?php
include 'db_connect.php';

// 1. Chuẩn bị câu lệnh SELECT
$stmt = $conn->prepare("SELECT * FROM students");
$stmt->execute();

// 2. Lấy tất cả dữ liệu
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Danh sách sinh viên</h2>
<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>ID</th>
            <th>Họ Tên</th>
            <th>Mã SV</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $sv): ?>
            <tr>
                <td><?php echo $sv['id']; ?></td>
                <td><?php echo htmlspecialchars($sv['fullname']); ?></td>
                <td><?php echo htmlspecialchars($sv['student_code']); ?></td>
                <td><?php echo htmlspecialchars($sv['email']); ?></td>
                <td>
                    <a href="#">Sửa</a> | 
                    <a href="#" onclick="return confirm('Xác nhận xóa?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>