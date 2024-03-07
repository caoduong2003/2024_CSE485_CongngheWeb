<?php
$products = [
    [
        "id" => 1,
        "name" => "Mô hình Senpuujin",
        "price" => 120,
        "image" => "image/anh1.png",
        "description" => "BanDai Namco."
    ],
    [
        "id" => 2,
        "name" => "Mô hình Gouraijin",
        "price" => 100,
        "image" => "image/anh2.png",
        "description" => "BanDai Namco."
    ],
    [
        "id" => 3,
        "name" => "Mô hình Tenkuujin",
        "price" => 100,
        "image" => "image/anh3.png",
        "description" => "BanDai Namco."
    ],
    [
        "id" => 4,
        "name" => "Mô hình Karakuri Giant Gourai Senpuujin ",
        "price" => 180,
        "image" => "image/anh4.png",
        "description" => "BanDai Namco."
    ],
    [
        "id" => 5,
        "name" => "Jean",
        "price" => 250,
        "image" => "image/anh5.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 6,
        "name" => "Đàn shamisen Mamoth",
        "price" => 40,
        "image" => "image/anh6.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 7,
        "name" => "Mamoth Shurikenger",
        "price" => 90,
        "image" => "image/anh7.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 8,
        "name" => "Geki Touja",
        "price" => 95,
        "image" => "image/anh8.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 9,
        "name" => "SaidaiOh",
        "price" => 120,
        "image" => "image/anh9.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 10,
        "name" => "Full bộ Lupinranger",
        "price" => 650,
        "image" => "image/anh10.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 11,
        "name" => "DaiTanken",
        "price" => 100,
        "image" => "image/anh11.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 12,
        "name" => "Daibouken",
        "price" => 110,
        "image" => "image/anh12.png",
        "description" => "BanDai Namco."
    ],    [
        "id" => 13,
        "name" => "Gao HunTer",
        "price" => 130,
        "image" => "image/anh13.png",
        "description" => "BanDai Namco."
    ],
    // ... add more products
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
    <link rel="stylesheet" href="asscets/style/style.css">
    <title>Document</title>
</head>
<body>
<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <img class="pic" src="<?php echo $product['image'] ?>" >
            <p>Sản Phẩm: <?php echo $product['name'] ?></p>
            <p>Giá: <?php echo $product['price'] ?></p>
            <p><?php echo $product['description'] ?></p>

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
