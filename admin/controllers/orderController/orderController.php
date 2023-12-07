<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/orderModel/orderModel.php";
$orderPage = new OrderPage();

$filterOrder = isset($_POST['selectedValue']) ? $_POST['selectedValue'] : 0;

$infoTableOrder = $orderPage->getInfoTableOrder($filterOrder);

if (isset($_POST['selectedValue']) && isset($_POST['madh'])) {
    $status = $_POST['selectedValue'];
    $madh = $_POST['madh'];
    $orderPage->updateStatusfbByMadh($status, $madh);
}

require_once $ROOT_ADMIN . "views/order/order.php";
