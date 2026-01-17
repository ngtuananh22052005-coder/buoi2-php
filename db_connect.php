<?php
$host = "localhost";
$dbname = "buoi2_php";
$username = "root";
$password = ""; // XAMPP mặc định là rỗng

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // Thiết lập chế độ báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 👉 DÙNG KHI TEST (sau này comment lại)
    // echo "Kết nối database thành công!";

} catch (PDOException $e) {
    // Thông báo thân thiện
    die("Hệ thống đang bảo trì, vui lòng quay lại sau");
}
