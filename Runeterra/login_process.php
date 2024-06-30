<?php
session_start();
require_once('db_connect.php'); // Đảm bảo rằng bạn đã kết nối đến cơ sở dữ liệu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate inputs
    if (empty($username) || empty($password)) {
        echo "Vui lòng điền đầy đủ thông tin!";
        exit();
    }

    // Xác thực người dùng
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: index.php'); // Chuyển hướng đến trang chủ sau khi đăng nhập thành công
            exit();
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
        }
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
    }

    $stmt->close();
}

$conn->close();
?>
