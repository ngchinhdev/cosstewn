<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$userid = isset($_POST['userid']) ? $_POST['userid'] : '';
$getTotalPriceProducts = $cartPage->getTotalPriceProducts($userid);
if ($getTotalPriceProducts) {
    echo number_format($getTotalPriceProducts['tong_tien'], 0, '.', '.') . ' đ';
}
