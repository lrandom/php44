<?php
session_start();
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    header("Location: index.php");
    exit();
}
require_once './dals/ProductDal.php';
$productDal = new ProductDal();
$product = $productDal->getObjectById($id);
if (!isset($_SESSION['cart'])) {
    //chưa có giỏ hàng
    $cart = [
        [
            'product' => $product, //thông tin sản phẩm
            'quantity' => 1 // số lượng sp
        ]
    ];
    //lưu vào session-> đảy sp vào gỉo hàng
    $_SESSION['cart'] = $cart;
} else {
    //đã có giỏ hàng
    $cart = $_SESSION['cart'];
    $isExist = false;
    foreach ($cart as $key => $item) {
        //kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
        if ($item['product']->id == $product->id) {
            $cart[$key]['quantity']++;
            $isExist = true;
            break;
        }
    }
    if (!$isExist) {
        $cart[] = [
            'product' => $product,
            'quantity' => 1
        ];
    }
    $_SESSION['cart'] = $cart;
}
header('Location: cart.php');
