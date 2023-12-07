<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/checkoutModel/checkoutModel.php";
    $checkout = new Checkout();

    if(isset($_SESSION['prod_id'])) {
        if(isset($_COOKIE['user_id'])) {
            $user_id = base64_decode($_COOKIE['user_id']);
            $user = $checkout->getCurUser($user_id);
        }

        $products_to_pay = [];
        $product_quantity = [$_SESSION['quantity_dt']];
        for($i = 0; $i < count($_SESSION['prod_id']); $i++) {
            $product = $checkout->getProductToPay($_SESSION['prod_id'][$i]);
            array_push($products_to_pay, $product);
        }
        $_SESSION['products_to_pay'] = $products_to_pay;
        $_SESSION['product_quantity'] = $product_quantity;
        $_SESSION['pay-from-cart'] = 'false';
        // var_dump($products_to_pay);
    }

    if(isset($_POST['checkout-cart'])) {
        if(isset($_COOKIE['user_id'])) {
            $user_id = base64_decode($_COOKIE['user_id']);
            $user = $checkout->getCurUser($user_id);
            // var_dump($user);
        }

        $products_to_pay = [];
        $product_quantity = $_POST['prod_quantity'];
        $total_promo = $_POST['promo'];
        for($i = 0; $i < count($_POST['prod_id']); $i++) {
            $product = $checkout->getProductToPay($_POST['prod_id'][$i]);
            array_push($products_to_pay, $product);
        }
        $_SESSION['products_to_pay'] = $products_to_pay;
        $_SESSION['product_quantity'] = $product_quantity;
        $_SESSION['pay-from-cart'] = 'true';
        // var_dump($total_promo);
    }
?>