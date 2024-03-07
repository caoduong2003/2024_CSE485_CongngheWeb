<?php
    $navItems = [
      "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "VĂN BẢN",
        "SINHVIÊN",
        "LIÊN HỆ"

    ];

    echo '<nav class="navbar"><ul>';
    echo '<li><img class="icon_home" src="assets/images/ico_home.png" alt="HOME">';
    echo '</li>';
    foreach ($navItems as $item)
    {
        echo "<li> <a href='#'>$item</a></li>";
    }
    echo '</ul><nav>';
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>


</body>
</html>
