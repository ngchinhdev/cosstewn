<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/checkoutModel/checkoutModel.php";
    $checkout = new Checkout();

    if(isset($_SESSION['prod_id'])) {
        $products_to_pay = [];
        for($i = 0; $i < count($_SESSION['prod_id']); $i++) {
            $product = $checkout->getProductToPay($_SESSION['prod_id'][$i]);
            array_push($products_to_pay, $product);
        }
        var_dump($products_to_pay);
    }
?>