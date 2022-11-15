<?php
require_once 'dals/ProductDal.php';
$productDal = new ProductDal();
$listProduct = $productDal->getAllProducts();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto">
    <div class="grid grid-cols-4 gap-2">
        <?php foreach ($listProduct as $product): ?>
            <div class="col-span-1">
                <img src="<?php echo $product->thumb; ?>" class="w-full h-64 object-cover"
                     alt="<?php echo $product->name; ?>">
                <h4><?php echo $product->name; ?></h4>
                <a href="add-to-cart.php?id=<?php echo $product->id; ?>">Add To Cart</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>