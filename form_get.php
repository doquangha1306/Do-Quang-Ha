<form method="GET" action="">
    <input type="text" name="keyword" placeholder="Nhập từ khóa...">
    <button type="submit">Tìm kiếm</button>
</form>

<?php
if (isset($_GET['keyword'])) {
    $keyword = htmlspecialchars($_GET['keyword']);
    echo "Bạn đang tìm kiếm từ khóa: <strong>$keyword</strong>";
}
?>