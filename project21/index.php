<?php 
include("./db/config.php");
$sql = "select name,price,description,image from products";

$res = mysqli_query($link,$sql);
$products = mysqli_fetch_all($res,MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
  <?php
  $itemsPerPage = 1;
  $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

  $totalPages = ceil(count($products)/$itemsPerPage);
  $currentPageItems = array_slice($products,($currentPage - 1)*$itemsPerPage,$itemsPerPage);

  ?>
<div class="content">
  <h1>Bán Laptop</h1>
  <div class="product-list">
    <?php foreach($currentPageItems as $product):?>
      <div class="product">
        <div class="images">
          <img class="img" src="./assets/images/<?= htmlspecialchars($product['image'])?>" alt="">
        </div>
        <div class="description">
          <p><?= $product['name']?></p>
          <p><strong>Price:</strong> <?= $product['price']?>$</p>
          <p><strong>Mô tả: </strong><?= $product['description']?></p>
        </div>
        
      </div>
    <?php endforeach ?> 
  </div>

  <div class="pagination">

    <?php if($currentPage > 1 ):?>
      <a href="?page=<?= $currentPage -1;?>">Previous</a>
    <?php endif; ?>


    <?php for($i =1 ;$i < $totalPages; $i++):?>
      <?php if($i == $currentPage): ?>
        <span class="active"><?= $i; ?></span>
      <?php else: ?>
        <?php if($i > $currentPage - 3 && $i < $currentPage +3): ?>
        <a href="?page=<?= $i?>"><?= $i;?></a> 
        <?php endif; ?>  
      <?php endif; ?>   
    <?php endfor; ?>  


    <?php if($currentPage < $totalPages  ):?>
      <a href="?page=<?= $currentPage +1;?>">Next</a>
    <?php endif; ?>      
  </div>
</div>

</body>
</html>