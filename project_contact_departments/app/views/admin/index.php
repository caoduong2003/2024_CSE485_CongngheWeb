<<<<<<< HEAD
<?php
$users = [
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],

    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    [
        'name' =>'Hồ Công Thành',
         'phone' => '0988888888',
         'Department'=>'Ngành CNTT'
     ],
     [
        'name' =>'Hồ Công Thành',
         'phone' => '0988888888',
         'Department'=>'Ngành CNTT'
     ],
     [
        'name' =>'Hồ Công Thành',
         'phone' => '0988888888',
         'Department'=>'Ngành CNTT'
     ],
     
     [
        'name' =>'Hồ Công Thành',
         'phone' => '0988888888',
         'Department'=>'Ngành CNTT'
     ],
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    [
       'name' =>'Hồ Công Thành',
        'phone' => '0988888888',
        'Department'=>'Ngành CNTT'
    ],
    ];
$itemsPerPage = 5;
$currentPage = isset($_GET['page'])? $_GET['page']:1;
$totalPages = ceil(count($users) / $itemsPerPage);
$currentPageItems = array_slice($users, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary border border-danger">
                <div class="container-fluid">
                    <a class="navbar-brand t" href="#">TLU.NET</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="users.php">Danh bạ người dùng</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                        </li>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </ul>
                    </div>
                    <div> 
                        
                        <a href="#" class = "text-decoration-none text-success">Tài khoản:.....</a>  
                        <a href="#" class = "btn btn-danger">Thoát</a>
                    </div>
                </div>
            </nav>
    </header>
    <main>
        <div class = "container">
            <div class="row">
                <div class ="col">
                    <h1 class = "text-center text-danger my-3">DANH BẠ NGƯỜI DÙNG</h1>
                    <a href="#" class = "btn btn-primary">Thêm tài khoản</a>
                    <table class="table border border-danger my-2">
                        <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Đơn vị</th>
                            <th scope="col" colspan="3" class="text-center">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0 ;?>
                        <?php foreach($currentPageItems as $user):?>
                        <tr>
                            <th scope="row"><?=++$i?> </th>
                            <td><?= $user['name']?></td>
                            <td><?= $user['phone']?></td>
                            <td><?= $user['Department']?></td>
                            <th scope="col">
                                <a href="" class = "btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            </th> 
                            <th scope="col">
                                <a href="" class = "btn btn-danger"><i class="bi bi-pencil-fill"></i></a>
                            </th>   
                            <th scope="col">
                                <a href="" class = "btn btn-warning"><i class="bi bi-trash-fill"></i></a>
                            </th>
                            <!-- <th scope="col">
                                <a href="" class = "btn btn-info"><i class="bi bi-key-fill"></i></a>
                            </th> -->
                        </tr>
                      <?php endforeach; ?>
                        
                    </table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <div class="pagination" >
            <?php if ($currentPage > 1): ?>
                <a style="text-decoration: none;" href="?page=<?php echo $currentPage - 1; ?>">&laquo;</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $currentPage): ?>
                    <span style="text-decoration: none;" class="active"><?php echo $i ;?></span>
                <?php else: ?>
                    <a style="text-decoration: none;" href="?page=<?php echo $i; ?>"><?php echo  $i ;?></a>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <a style="text-decoration: none;" href="?page=<?php echo $currentPage + 1; ?>">&raquo;</a>
            <?php endif; ?>
        </div>
    </ul>
</nav>
                </div>
            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
=======
// giao diện admin
// nút thêm sửa xóa
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

>>>>>>> d9e45b5b153d77a1af42b1ebf96913eca44e6fa6
</html>