<?php
// Hiển thị các nhân viên
$products = [
    [
        "id" => 1,
        "name" => "Người A",
        "SDT" => 120,
        "image" => "image/anh.png",
        "description" => "TLU."
    ],
    [
        "id" => 2,
        "name" => "Người B",
        "SDT" => 100,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],
    [
        "id" => 3,
        "name" => "Người C",
        "SDT" => 110,
        "image" => "image/anh.png",
        "description" => "TLU."
    ],
    [
        "id" => 4,
        "name" => "Người D ",
        "SDT" => 180,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],
    [
        "id" => 5,
        "name" => "Người E",
        "SDT" => 250,
        "image" => "image/anh5.png",
         "description" => "TLU."
    ],    [
        "id" => 6,
        "name" => "Người F",
        "SDT" => 40,
        "image" => "image/anh6.png",
        "description" => "TLU."
    ],    [
        "id" => 7,
        "name" => "Người G",
        "SDT" => 90,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],    [
        "id" => 8,
        "name" => "Người H",
        "SDT" => 95,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],    [
        "id" => 9,
        "name" => "Người I",
        "SDT" => 130,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],    [
        "id" => 10,
        "name" => "Người J",
        "SDT" => 650,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],    [
        "id" => 11,
        "name" => "Người K",
        "SDT" => 140,
        "image" => "image/anh.png",
        "description" => "TLU."
    ],    [
        "id" => 12,
        "name" => "Người L",
        "SDT" => 150,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],    [
        "id" => 13,
        "name" => "Người M",
        "SDT" => 170,
        "image" => "image/anh.png",
         "description" => "TLU."
    ],

];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$currentPageItems =array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
$totalPages = ceil(count($products) / $itemsPerPage);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <title>Employees</title>
</head>

<body>
    <div class="product-list">
        <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <a href="detail.php?id=<?php echo $product['id']; ?>">
                <img class="pic" src="<?php echo $product['image']; ?>">
                <p>Tên Nhân Viên: <?php echo $product['name']; ?></p>
                <p>SDT: <?php echo $product['SDT']; ?></p>
                <p><?php echo $product['description']; ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
        <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>