<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$user_id = '';
if (isset($_COOKIE['user_id'])) {
    $user_id =  isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
} else if (isset($_GET['u'])) {
    $user_id =  isset($_GET['u']) ? base64_decode($_GET['u']) : '';
}
$removesp = isset($_GET['removesp']) ? $_GET['removesp'] : '';
$magh = isset($_GET['magh']) ? $_GET['magh'] : '';
$matk = isset($_GET['matk']) ? $_GET['matk'] : '';
if (isset($user_id) && $user_id) {
    // $getUserIdbyEmail = $cartPage->getUserIdbyEmail($email);
    $matk = $user_id;
    $getProductsByUserId = $cartPage->getProductsByUserId($matk);
    $getTotalPriceProducts = $cartPage->getTotalPriceProducts($matk);
    $totalQuantity = $cartPage->getTotalQuantityProductByCartUser($matk);

    // Chức năng xóa sản phẩm trong giỏ hàng
    if (!empty($magh)) {
        $removeProductInTableCart = $cartPage->removeProductInTableCart($removesp, $magh, $matk);

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
    $promm = 0;
    if (isset($_POST['vouchers'])) {
        for ($i = 0; $i < count($_POST['vouchers']); $i++) {
            $promm += (int)$_POST['vouchers'][$i];
        }
    }
    $_SESSION['promotion'] = $promm;
    header("Location: /cosstewn/app/controllers/index.php?page=thanh-toan");
}
