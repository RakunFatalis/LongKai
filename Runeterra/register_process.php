<?php
session_start();
require_once('db_connection.php'); // Adjust path if necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate inputs
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "Vui lòng điền đầy đủ thông tin!";
        exit();
    }

    if ($password != $confirm_password) {
        echo "Mật khẩu xác nhận không khớp!";
        exit();
    }

    // Check if username already exists
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Tên đăng nhập đã tồn tại!";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into database
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['username'] = $username; // Log in immediately after successful registration
        header('Location: index.php'); // Redirect to main page after successful registration
        exit();
    } else {
        echo "Đăng ký không thành công. Vui lòng thử lại!";
    }

    $stmt->close();
}

$conn->close();
?>
