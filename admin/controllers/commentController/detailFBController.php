<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/feedbackModel/detaiFBModel.php";
$detailFBPage = new DetailFBPage();
$namesp = $_POST['namesp'];
$masp = $_POST['masp'];
$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
$page_size = 10;
$startRow = ($pageNumber - 1) * $page_size;
$countColumnFB = $detailFBPage->countColumnfbByMasp($masp);
$totalPages = ceil($countColumnFB / $page_size);
$InfoFeedbackByMasp = $detailFBPage->getInfoFeedbackByMasp($masp, $page_size, $pageNumber);

if(isset($_POST['selectedValue']) && isset($_POST['mabl'])){
    $status = $_POST['selectedValue'];
    $mabl = $_POST['mabl'];
    $detailFBPage->updateStatusfbByMabl($status, $mabl);

    // sau khi thay đổi trạng thái bình luận thì cập nhật lại trang
    $InfoFeedbackByMasp = $detailFBPage->getInfoFeedbackByMasp($masp, $page_size, $pageNumber);
}
require_once $ROOT_ADMIN . "views/comment/detailFB.php";