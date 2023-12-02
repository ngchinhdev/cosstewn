<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$userid = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
$getTotalPriceProducts = $cartPage->getTotalPriceProducts($userid);
$getProductsByUserId = $cartPage->getProductsByUserId($userid);
if ($getTotalPriceProducts) {
    $totalPriceProducts =  $getTotalPriceProducts['tong_tien'];
}

if ($getProductsByUserId) {
    $totalDiscount = 0;

    foreach ($getProductsByUserId as $row) {
        $masp = $row['masp'];
        $totalPromoPrice = $cartPage->totalPromoPrice($masp);
        $totalDiscount += $totalPromoPrice;
    }

    $totalDiscounts = $totalDiscount;
}   

$lastPrice = $totalPriceProducts - $totalDiscounts;

echo number_format($lastPrice, 0, '.', '.') . ' đ';