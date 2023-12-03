<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/promoModel/detailpromoModel.php";
$detailPromoPage = new DetailPromoPage();

$makm = isset($_POST['makm']) ? $_POST['makm'] : '';
$namekm = isset($_POST['namekm']) ? $_POST['namekm'] : '';
$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
$page_size = 10;
$startRow = ($pageNumber - 1) * $page_size;
$countColumnDetailPromo = $detailPromoPage->countColumnDetailPromo($makm);
$totalPages = ceil($countColumnDetailPromo / $page_size);
$infoProductsByMakm = $detailPromoPage->getInfoProductsByMakm($makm, $page_size, $pageNumber);

if (isset($_POST['currentpage']) && isset($_POST['removemasp']) && isset($_POST['removemakm'])) {
    $masp = $_POST['removemasp'];
    $makm = $_POST['removemakm'];
    $detailPromoPage->removeColumnDetailPromo($masp, $makm);

    // Sau khi xóa cập nhật lại dữ liệu trang
    $pageNumber = $_POST['currentpage'];
    $startRow = ($pageNumber - 1) * $page_size;
    $countColumnDetailPromo = $detailPromoPage->countColumnDetailPromo($makm);
    $totalPages = ceil($countColumnDetailPromo / $page_size);
    $infoProductsByMakm = $detailPromoPage->getInfoProductsByMakm($makm, $page_size, $pageNumber);
}

require_once $ROOT_ADMIN . "views/promote/detailpromo.php";
