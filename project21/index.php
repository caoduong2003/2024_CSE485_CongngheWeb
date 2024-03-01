
<?php
include "product.php";
$itemsPerPage = 4;
$currentPage = isset($_GET['page'])? $_GET['page']:1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class = "text-center"> Shop </h1>
        <div class = "row">
            <?php foreach($currentPageItems as $product):?>
                <div class = "col-3">
                    <div class = "card">
                        <img src = "<?php echo $product['image']?>" class="card-img-top" alt="">
                        <div lass = "card-body">
                            <h5 class = "card-title"><?php echo $product['name']?></h5>
                            <p class = "card-text"><?php echo $product['price']?></p>
                            <p class = "card-text"><?php echo $product['description']?></p>
                            <a href="#"class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>  
    </div>
    <br>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
             <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i ; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
  </ul>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>

