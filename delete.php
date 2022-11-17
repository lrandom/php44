<?php
session_start();
$cart = $_SESSION['cart'] ?? null;
if (!$cart) {
    header('Location: index.php');
    exit();
}
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    header("Location: index.php");
    exit();
}
foreach ($cart as $key => $item) {
    //kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
    if ($item['product']->id == $id) {
        array_splice($cart, $key, 1);
        break;
    }
}
$_SESSION['cart'] = $cart;
header('Location: cart.php');