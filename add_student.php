<?php include 'db_connect.php'; ?>

<form method="POST">
    <input type="text" name="fullname" placeholder="Họ tên" required><br>
    <input type="text" name="student_code" placeholder="Mã SV" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit" name="btn_add">Thêm mới</button>
</form>

<?php
if (isset($_POST['btn_add'])) {
    $fullname = $_POST['fullname'];
    $student_code = $_POST['student_code'];
    $email = $_POST['email'];

    try {
        $sql = "INSERT INTO students (fullname, student_code, email) VALUES (:fullname, :student_code, :email)";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters để chống SQL Injection
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':student_code', $student_code);
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        echo "<p style='color:green'>Thêm sinh viên thành công!</p>";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>