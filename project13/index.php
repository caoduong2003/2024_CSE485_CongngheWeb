<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
        'image' => 'pic1.png.webp'

    ],

    [
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng',
        'image' => 'pic2.png.webp'
    ],

    [
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB, ....',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ',
        'image' => 'pic3.png.webp'
    ],

    [
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'fee' => '9.600.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '36 giờ',
        'image' => 'pic4.png.webp'
    ],

    [
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'fee' => '6.000.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '40 giờ',
        'image' => 'pic5.png.webp'
    ],

    [
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu, ...',
        'fee' => '4.500.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '30 giờ',
        'image' => 'pic6.png.webp'
    ],

];


// Hiển thị danh sách khóa học

echo '<div class="scren">';
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<div class="picture">';
    echo '<img class="pic" src="./picture/' . $course['image'] . '" alt="ko co' .'">';
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