<?php
require_once "../models/cartModel/cart.php";
$cartPage = new CartPage();
$email = isset($_SESSION['data_user']['email']) ? $_SESSION['data_user']['email'] : '';
$magh = isset($_GET['removesp']) ? $_GET['removesp'] : '';

if (isset($_SESSION['data_user']['email'])) {
    $getUserIdbyEmail = $cartPage->getUserIdbyEmail($email);
    $matk = $getUserIdbyEmail;
    $getProductsByUserId = $cartPage->getProductsByUserId($matk);
    $getTotalPriceProducts = $cartPage->getTotalPriceProducts($matk);
    $totalQuantity = $cartPage->getTotalQuantityProductByCartUser($matk);

    // Chức năng xóa sản phẩm trong giỏ hàng
    if (!empty($magh)) {
        $removeProductInTableCart = $cartPage->removeProductInTableCart($magh, $matk);

        header("Location: index.php?page=gio-hang");
        exit();
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['submit-cart']) && isset($_SESSION['data_user']['email'])) {
    $matk = $_POST['input-matk'];
    $masp = $_POST['input-masp'];
    $quantity = $_POST['quantity-pd'];
    $cartPage->insertProductIntoCart($matk, $masp, $quantity);

    // sau khi submit giỏ hàng cập nhật lại các function liên quan đến giỏ hàng
    $getProductsByUserId = $cartPage->getProductsByUserId($matk);
    $getTotalPriceProducts = $cartPage->getTotalPriceProducts($matk);
    $totalQuantity = $cartPage->getTotalQuantityProductByCartUser($matk);
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['submit-cart']) && !isset($_SESSION['data_user']['email'])) {
    header("Location: index.php?page=dang-nhap");
    exit();
}
