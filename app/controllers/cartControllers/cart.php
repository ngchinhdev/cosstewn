<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();
// $email = isset($_SESSION['data_user']['email']) ? $_SESSION['data_user']['email'] : '';
$user_id = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
$magh = isset($_GET['removesp']) ? $_GET['removesp'] : '';

if ($user_id) {
    // $getUserIdbyEmail = $cartPage->getUserIdbyEmail($email);
    $matk = $user_id;
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



if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['submit-cart']) && $user_id) {
    $matk = $user_id;
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

if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['submit-buy'])) {
    $_SESSION['prod_id'] = $_POST['prod_id'];
    $_SESSION['quantity_dt'] = $_POST['quantity-pd'];
    header("Location: /cosstewn/app/controllers/index.php?page=thanh-toan");
}
