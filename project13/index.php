<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học </title>
    <style>

        .course1{
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
            width: 30%;
            display: inline-block;
            margin-left: 15px;
            
        } 
        .course1 h2{
            color: #333;
        }
        .course1 p{
            color: #666;
        }
        .course2{
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
            width: 30%;
            display: inline-block;
            margin-left: 15px;
        } 
        .course2 h2{
            color: #333;
        }
        .course2 p{
            color: #666;
        }
        .images{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
    $courses1 = [
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện.Phù hợp với học sinh tốt nghiệp THPT,sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'free' => 'Học bổng 15.000.000 VNĐ',
            'start_date' => 'Khai giảng: 2/2024',
            'duration' => 'Thời lượng: 2 - 2.5 năm',
            'image' => 'capture1.png'
        ],
        [
            'title' => 'LẬP TRÌNH WEB FULLSTACK',
            'description' => 'Khoá học phù hợp với người bắt đầu lập trình hoăch người chuyển nghề.Trang bị từ fronend đến backend,xây dựng website hoàn chỉnh sau khoá học',
            'free' => 'Ưu đãi giảm 15% học phí',
            'start_date' => 'Khai giảng: 2/2024',
            'duration' => 'Thời lượng: 6 tháng',
            'image' => 'capture2.png'
        ],
        [
           'title' => 'LẬP TRÌNH JAVA FULLSTACK',
            'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java.các ứng dụng doanh nghiệp sử dụng J2EE,Servlet,JSP,Spring,Framework,ẸB,...',
            'free' => 'Ưu đãi giảm 15% học phí',
            'start_date' => 'Khai giảng: 2/2024',
            'duration' => 'Thời lượng: 236 giờ',
            'image' => 'capture3.png'
        ]
    ];
        $courses2 = [
        [
            'title' => 'LẬP TRÌNH PHP & LARAVEL',
            'description' => 'PHP là một trong các nguồn ngôn ngữ thiết kế web mạnh nhất.Khoá học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
            'start_date' => 'Khai giảng: 5/2/2024',
            'free' => 'Học phí: 9.600.000 VNĐ',
            'duration' => 'Thời lượng: 36 giờ',
            'image' => 'capture4.png'
        ],
        [
            'title' => 'KHOÁ HỌC LẬP TRÌNH .NET',
            'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP>NRT Core MVC.Để học tốt khoá học yêu cầu học viên đã có kiến thức C# và Frontend',
            'start_date' => 'Khai giảng: 2/2024',
            'duration' => 'Thời lượng: 40 giờ',
            'free' => 'Học phí: 6.000.000 VNĐ',
            'image' => 'capture5.png'
        ],
        [
            'title' => 'LẬP TRÌNH SQL SERVER',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật lọc dũ liệu,phân tích,thiết kế và quản trị cơ sở dữ liệu',
            'start_date' => 'Khai giảng: 2/2024',
            'free' => 'Học phí: 4.500.000 VNĐ',
            'duration' => 'Thời lượng: 30 giờ',
            'image' => 'capture6.png'
        ]
        ];
        foreach($courses1 as $course){
            echo '<div class = "course1">';
            echo '<img class="images" src="./assets/image/' . $course['image'] . '" alt=""' ;
            echo '<h2>'. $course['title'] . '</h2>';
            echo '<p>'.$course['description'].'</p>';
            echo '<p>'.$course['free'].'</p>';
            echo '<p>'.$course['start_date'].'</p>';
            echo '<p>'.$course['duration'].'</p>';
            echo '</div>';
        };

        foreach($courses2 as $course){
            echo '<div class = "course2">';
            echo '<img class="images" src="./assets/image/' . $course['image'] . '" alt=""' ;
            echo '<h2>'. $course['title'] . '</h2>';
            echo '<p>'.$course['description'].'</p>';
            echo '<p>'.$course['free'].'</p>';
            echo '<p>'.$course['start_date'].'</p>';
            echo '<p>'.$course['duration'].'</p>';
            echo '</div>';
        };
    ?>
</body>
</html>