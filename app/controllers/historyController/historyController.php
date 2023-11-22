<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/historyModel/historyModel.php";
    $history = new History();

    $all_orders = array();
    $order_details = array();
   
    if(isset($_GET['u'])) {
        $_SESSION["user_id"] = base64_decode($_GET['u']);
        $cur_user = $history->getCurrentUser($_SESSION["user_id"]);
        extract($cur_user[0]);
        // if(empty($cur_user[0])) {
        //     $_SESSION['error'] = "Không hợp lệ!";
        //     return;
        // }
        $_SESSION["name"] = $ho_ten;
        $_SESSION["email"] = $email;
        $_SESSION["avatar"] = $hinh_anh;

        if(isset($_GET['status'])) {
            $type_order = $_GET['status'];
            $user_id = $_SESSION["user_id"];
    
            if($type_order === 'all') {
                $all_orders = $history->getAllOrders($user_id);
                for($i = 0; $i < count($all_orders); $i++){
                    $id = $all_orders[$i]['madh'];
                    $detail = $history->getDetailsOrder($user_id, $id);
                    array_push($order_details, $detail);
                }
            }
    
            if($type_order === 'pending') {
                $all_orders = $history->getPendingOrders($user_id);
                for($i = 0; $i < count($all_orders); $i++){
                    $id = $all_orders[$i]['madh'];
                    $detail = $history->getDetailsOrder($user_id, $id);
                    array_push($order_details, $detail);
                }
            }
    
            if($type_order === 'complete') {
                $all_orders = $history->getCompleteOrders($user_id);
                for($i = 0; $i < count($all_orders); $i++){
                    $id = $all_orders[$i]['madh'];
                    $detail = $history->getDetailsOrder($user_id, $id);
                    array_push($order_details, $detail);
                }
            }
    
        }
    }
?>