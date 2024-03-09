<?php
// session_start();//DICH VU BAO VE
// if ($_SESSION['user_id']) {
//     unset($_SESSION['user_id']);//HUY PHIEN = THU HOI THE
//     header("Location:login.php"); //CHUYEN HUONG
// }
session_start();
session_destroy(); // Destroy session
setcookie('logged_in', "", 1, "/"); // Expire cookie
header('Location: login.php'); 
?>



