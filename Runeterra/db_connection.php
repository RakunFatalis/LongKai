<?php
// Thông tin kết nối tới database
$servername = "localhost"; // Tên server MySQL (thường là localhost)
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu người dùng MySQL
$dbname = "runetarra"; // Tên database đã tạo (vd: runeterra_db)

// Tạo kết nối tới MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới database thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối tới database thành công!";
}
?>
