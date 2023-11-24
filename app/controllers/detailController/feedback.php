<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/detailModel/feedback.php";
$detailFeedback = new DetailFeedback();
$email = isset($_SESSION['data_user']['email']) ? $_SESSION['data_user']['email'] : '';
$masp = isset($_GET['masp']) ? $_GET['masp'] : '';
// $InfoUsers là matk của người dùng
$InfoUsers = $detailFeedback->InfoUsers($email);

if ($InfoUsers) {
    $matk = $InfoUsers['matk'];
    // kiểm tra người dùng đã mua sản phẩm chưa để được đánh giá
    $checkPurchaseProducts = $detailFeedback->checkPurchaseProducts($matk, $masp);
}
