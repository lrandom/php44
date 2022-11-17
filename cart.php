<?php
session_start();
$cart = $_SESSION['cart'] ?? null;
if (!$cart) {
    header('Location: index.php');
    exit();
}
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
<div class="mx-auto container">
    <div class="grid grid-cols-6 gap-2 font-bold">
        <div>
            Thumbnail
        </div>
        <div>
            Name
        </div>
        <div>
            Price
        </div>
        <div>
            Quantity
        </div>
        <div>
            Total Price
        </div>
        <div>
            Action
        </div>

    </div>

    <?php
    $subTotal = 0;
    foreach ($cart as $cartItem) {
        ?>
        <div class="grid grid-cols-6 gap-2 border-b py-2 ">
            <div>
                <img src="<?php echo $cartItem['product']->thumb; ?>"
                     alt="<?php echo $cartItem['product']->name; ?>" width="100"
                />
            </div>
            <div>
                <?php echo $cartItem['product']->name; ?>
            </div>
            <div>
                <?php echo $cartItem['product']->price; ?>
            </div>
            <div>
                <a href="update-cart-quantity.php?id=<?php echo $cartItem['product']->id; ?>&quantity=1">+</a>
                <?php echo $cartItem['quantity']; ?>
                <a href="update-cart-quantity.php?id=<?php echo $cartItem['product']->id; ?>&quantity=-1">-</a>
            </div>
            <div>
                <?php
                $subTotal += $cartItem['product']->price * $cartItem['quantity'];
                echo $cartItem['product']->price * $cartItem['quantity']; ?>
            </div>
            <div>
                <a href="delete.php?id=<?php echo $cartItem['product']->id; ?>">Delete</a>
            </div>
        </div>
        <?php
    }
    ?>


    <div>
        <ul>
            <li>
                Sub Total: <?php echo $subTotal; ?>
            </li>
            <li>
                Tax(10%) <?php echo $subTotal * 0.1; ?>
            </li>
            <li>
                Total: <?php echo $subTotal + ($subTotal * 0.1); ?>
            </li>
            <li>
                <a href="checkout.php">Checkout</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
