<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/historyModel/historyModel.php";
    $history = new History();

    $all_orders = array();
    $order_details = array();

    if(isset($_GET['status'])) {
        $type_order = $_GET['status'];

        if($type_order === 'all') {
            $all_orders = $history->getAllOrders(37);
            for($i = 0; $i < count($all_orders); $i++){
                $id = $all_orders[$i]['madh'];
                $detail = $history->getDetailsOrder(37, $id);
                array_push($order_details, $detail);
            }
        }

        if($type_order === 'pending') {
            $all_orders = $history->getPendingOrders(37);
            for($i = 0; $i < count($all_orders); $i++){
                $id = $all_orders[$i]['madh'];
                $detail = $history->getDetailsOrder(37, $id);
                array_push($order_details, $detail);
            }
        }

        if($type_order === 'complete') {
            $all_orders = $history->getCompleteOrders(37);
            for($i = 0; $i < count($all_orders); $i++){
                $id = $all_orders[$i]['madh'];
                $detail = $history->getDetailsOrder(37, $id);
                array_push($order_details, $detail);
            }
        }

    }


?>