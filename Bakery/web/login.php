<?php
// Kết nối cơ sở dữ liệu MySQL
$conn = new mysqli('localhost', 'root', '', 'user_system');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form đăng nhập
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Tìm người dùng theo email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Kiểm tra mật khẩu đã mã hóa
        if (password_verify($password, $user['password'])) {
            echo "Đăng nhập thành công!";
        } else {
            echo "Mật khẩu không chính xác!";
        }
    } else {
        echo "Email không tồn tại!";
    }
}

$conn->close();
?>
