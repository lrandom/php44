<?php
session_start();
$cart = $_SESSION['cart'] ?? null;
if (!$cart) {
    header('Location: index.php');
    exit();
}
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    header("Location: cart.php");
    exit();
}
$quantity = $_GET['quantity'] ?? null;
if (!$quantity || !is_numeric($quantity)) {
    header("Location: cart.php");
    exit();
}
foreach ($cart as $key => $item) {
    //kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
    if ($item['product']->id == $id) {
        $cart[$key]['quantity'] += $quantity;
        if ($cart[$key]['quantity'] <= 0) {
            array_splice($cart, $key, 1);
        }
        break;
    }
}
$_SESSION['cart'] = $cart;
header('Location: cart.php');