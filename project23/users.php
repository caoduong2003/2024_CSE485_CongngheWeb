<?php
$users = [
    [
    "username" => "johndoe",
    "password" => password_hash("abc", PASSWORD_DEFAULT), // mật khẩu băm
    "name" => "John Doe",
    "email" => "johndoe@example.com"
    ],
    [
    "username" => "thanh",
    "password" => password_hash("123", PASSWORD_DEFAULT), // mật khẩu băm
    "name" => "Hocongthanh",
    "email" => "hocongthanh@example.com"
    ]
    
   ];