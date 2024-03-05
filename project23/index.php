<?php

// include("./db/config.php");
// header('Location: login.php');
$password = "pass";

// Tạo một băm cho mật khẩu
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Hiển thị băm
echo $hashedPassword;

if(password_verify("pass",$hashedPassword)){
  echo "<br>password invalid";
}else{
  echo "password wrong";
}
?>
