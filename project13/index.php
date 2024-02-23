<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Danh sách khóa học</title>
</head>
<body>
<?php
$courses = [
    [
        'title' => 'HỌC VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam tứ Aptech Global. Phát triền nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2-2.5 năm',
        'image' => 'banner1.png.webp'

    ],

    [
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng',
        'image' => 'banner2.png.webp'
    ],

    [
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB, ....',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ',
        'image' => 'banner3.png.webp'
    ],

    [
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'fee' => '9.600.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '36 giờ',
        'image' => 'banner4.png.webp'
    ],

    [
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'fee' => '6.000.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '40 giờ',
        'image' => 'banner5.png.webp'
    ],

    [
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu, ...',
        'fee' => '4.500.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '30 giờ',
        'image' => 'banner6.png.webp'
    ],

];


// Hiển thị danh sách khóa học

echo '<div class="show_all">';
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<div class="picture">';
    echo '<img class="img_course" src="./assets/images/' . $course['image'] . '" alt="' . $course['title'] .  '">';
    echo '</div>';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '<p>Khai giảng: ' . $course['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';

}
echo '</div>';

?>
</body>
</html>
