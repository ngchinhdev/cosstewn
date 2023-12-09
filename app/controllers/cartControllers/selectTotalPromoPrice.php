<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
    $cartPage = new CartPage();

    $userid = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
    $getProductsByUserId = $cartPage->getProductsByUserId($userid);

    if ($getProductsByUserId) {
        $totalDiscount = 0;

        foreach ($getProductsByUserId as $row) {
            $masp = $row['masp'];
            $totalPromoPrice = $cartPage->totalPromoPrice($masp);
            $totalDiscount += $totalPromoPrice * $row['so_luong_chitiet'];
            
        }
        $_SESSION['promotion'] = $totalDiscount;

        echo '- ' .  number_format($totalDiscount, 0, '.', '.') . ' đ';
    }
?>
