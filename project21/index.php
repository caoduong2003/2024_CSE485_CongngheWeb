<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "image" => "assets/images/anh1.png",
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "image" => "assets/images/anh2.jpg",

        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 3,
        "name" => "Jean",
        "price" => 83,
        "image" => "assets/images/anh3.jpg",

        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 4,
        "name" => "Jean",
        "price" => 33,
        "image" => "assets/images/anh4.webp",

        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 5,
        "name" => "Jean",
        "price" => 63,
        "image" => "assets/images/anh1.png",

        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 6,
        "name" => "Jean",
        "price" => 13,
        "image" => "assets/images/anh1.png",

        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 7,
        "name" => "Jean",
        "price" => 43,
        "image" => "assets/images/anh1.png",

        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 8,
        "name" => "Jean",
        "image" => "assets/images/anh1.png",
        "price" => 9,
        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 9,
        "name" => "Jean",
        "image" => "assets/images/anh1.png",
        "price" => 6,
        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 10,
        "name" => "Jean",
        "image" => "assets/images/anh1.png",
        "price" => 25,
        "description" => "A comfortable and stylish Jean."
    ],

];

$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Document</title>
</head>
<body>
<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <img class="images" src="<?php echo $product['image'] ?>" alt="image">
            <p>Sản Phẩm: <?php echo $product['name'] ?></p>
            <p>Giá: <?php echo $product['price'] ?></p>
            <p><?php echo $product['description'] ?></p>

        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?><?php for ($i = 1; $i <= $totalPages; $i++): ?>
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

