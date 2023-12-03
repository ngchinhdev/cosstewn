<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/checkoutModel/checkoutModel.php";
    $checkout = new Checkout();
    
    if(isset($_SESSION['POST'])) {
        extract($_SESSION['POST']);
        $user_id = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
        if($user_id) {
            $order_id = $checkout->addNewOrder($user_id, $customer_name, $phone, $email, $adr, $banking);
            for ($i = 0; $i < count($_SESSION['products_to_pay']); $i++) { 
                extract($_SESSION['products_to_pay'][$i]);
                $checkout->addNewOrderDetails($order_id, $masp, $_SESSION['product_quantity'][$i]);
                $checkout->decreaseQuantityProd($_SESSION['product_quantity'][$i], $masp);
            }
            header("Location: /cosstewn/app/controllers/index.php?page=dat-hang-thanh-cong");
            exit();
        } else {
            $order_id = $checkout->addNewOrder(null, $customer_name, $phone, $email, $adr, $banking);
            for ($i = 0; $i < count($_SESSION['products_to_pay']); $i++) { 
                extract($_SESSION['products_to_pay'][$i]);
                $checkout->addNewOrderDetails($order_id, $masp, $_SESSION['product_quantity'][$i]);
                $checkout->decreaseQuantityProd($_SESSION['product_quantity'][$i], $masp);
            }
            header("Location: /cosstewn/app/controllers/index.php?page=dat-hang-thanh-cong");
            exit();
        }
    }
?>