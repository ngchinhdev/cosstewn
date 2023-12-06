<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/orderModel/orderModel.php";
$orderPage = new OrderPage();

$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
$numberlast = isset($_POST['numberlast']) ? $_POST['numberlast'] : 0;
$page_size = 10;
$startRow = ($pageNumber - 1) * $numberlast;
$countColumnTaleOrder = $orderPage->countColumnTaleOrder();
$totalPages = ceil($countColumnTaleOrder / $page_size);
$infoTableOrder = $orderPage->getInfoTableOrder($page_size, $pageNumber);

if (isset($_POST['selectedValue']) && isset($_POST['madh'])) {
    $status = $_POST['selectedValue'];
    $madh = $_POST['madh'];
    $orderPage->updateStatusfbByMadh($status, $madh);
}

require_once $ROOT_ADMIN . "views/order/order.php";
