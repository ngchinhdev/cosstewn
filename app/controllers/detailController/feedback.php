<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/detailModel/feedback.php";
$detailFeedback = new DetailFeedback();

if(isset($_COOKIE['user_id'])) {
    $curr_user = $detailFeedback->getCurUser(base64_decode($_COOKIE['user_id']));
    $email = $curr_user['email'];
    $masp = isset($_GET['masp']) ? $_GET['masp'] : '';
    // $InfoUsers là matk của người dùng
    $InfoUsers = $detailFeedback->InfoUsers($email);
    
    if ($InfoUsers) {
        $matk = $InfoUsers['matk'];
        // kiểm tra người dùng đã mua sản phẩm chưa để được đánh giá
        $checkPurchaseProducts = $detailFeedback->checkPurchaseProducts($matk, $masp);
    }
}

if(isset($_GET['masp']) && $_GET['masp']) {
    $cur_prod = $detailFeedback->getCurProductStatus($_GET['masp']);
    $is_not_exist = $cur_prod['maloai'] == 17;
}

