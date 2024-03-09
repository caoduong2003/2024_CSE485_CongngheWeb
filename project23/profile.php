<?php
include "users.php";
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
 header('Location: login.php'); //chuyển đến đăng nhập nếu không được xác thực
}
$username = $_SESSION['user_id'];
// lấy dữ liệu người dùng từ bảng người dùng
$user = null;
foreach ($users as $u) {
 if ($u['username'] === $username) {
 $user = $u;
 break;
 }
}
if ($user) {
 // Hiện thị thông tin người dùng

 echo "Welcome, " . $user['name'] . "!";
 echo "<br>Email: " . $user['email'];
 
} else {
 echo "Lỗi: Không tìm thấy đăng nhập";
}
?>