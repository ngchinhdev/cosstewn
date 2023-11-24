<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$userid = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
$getTotalPriceProducts = $cartPage->getTotalPriceProducts($userid);
if ($getTotalPriceProducts) {
    echo number_format($getTotalPriceProducts['tong_tien'], 0, '.', '.') . ' đ';
}
