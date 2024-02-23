<?php
  $navItem =[
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
  ];

  echo '<nav class="navbar"><ul>';
    foreach($navItem as $item){
      echo "<li><a href=#>$item</a></li>";
    }

  echo '</ul></nav>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
   
    .navbar{
      background-color: #000099;
      overflow: hidden;
    }

    .navbar :last-child{
      border: none;
    }
    .navbar li{
     list-style: none;
     display: inline-block; 
     border-right: 1px solid white;
    }
    .navbar a{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      color: white;
      font-weight: bold;
      text-decoration: none;
      padding: 15px 16px;
     
    }

    .navbar a:hover{
      background-color:  #1aa3ff;
    }
  </style>
</body>
</html>