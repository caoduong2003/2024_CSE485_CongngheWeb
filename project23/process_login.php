<?php

include "users.php";
session_start(); 
$username = $_POST['user'];
$password = $_POST['pass'];
// ktra tên người dùng tồn tại không
$user = null;
foreach ($users as $u) {
 if ($u['username'] === $username) {
 $user = $u;
 break;
 }
}
if ($user && password_verify($password, $user['password'])) {
 // đăng nhập thành công
 $_SESSION['user_id'] = $user['username']; // Lưu trữ ID
 setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // đặt cookie trong 30 ngày
 header('Location: profile.php'); // chuyển hướng
} else {
 
 echo "Tên người dùng hoặc mật khẩu sai";
}
?>
   
<!-- // if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     //Lay ra du lieu tu FORM
//     $user = $_POST['user'];
//     $pass = $_POST['pass'];
//     //Kiem tra CSDL (chua hoc)
//     if($user == 'thanh' && $pass == '123'){ //THU Can cuoc cong dan
//         session_start();
//         $_SESSION['user_id'] = $user; //CAPTHE
//         header("Location:admin/index.php");//CHUYEN HUONG MAC DINH
//     }else{
//         header("Location:login.php?error=haserror");
//     }
// } -->