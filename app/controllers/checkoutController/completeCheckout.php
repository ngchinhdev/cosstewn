<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/checkoutModel/checkoutModel.php";
    $checkout = new Checkout();

    if(isset($_POST['checkout_order'])) {
        extract($_POST);
        $user_id = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
        if($user_id) {
            $order_id = $checkout->addNewOrder($user_id, $customer_name, $phone, $email, $adr, $banking);
            if(isset($_SESSION['pay-from-cart']) && $_SESSION['pay-from-cart'] === 'true') {
                $checkout->deleteCartAfterBuy((int)$user_id);
            }
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

    if(isset($_POST['redirect'])) {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        extract($_POST);
        $_SESSION["POST"] = $_POST;
    
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/cosstewn/app/controllers/checkoutController/vnpayCheckout.php";
        $vnp_TmnCode = "D3YA7VY9";//Mã website tại VNPAY 
        $vnp_HashSecret = "EAORMTHRBZJXXRNELCEUSIEOCEMWKKHQ"; //Chuỗi bí mật
    
        $vnp_TxnRef = rand(0, 10000); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán VNPAY';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = (int)$sum_payment * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = '';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
    
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
    
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);

        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
?>