<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/promoModel/insertdetailpromoModel.php";
$insertDetailPromoPage = new InsertDetailPromoPage();
$makm = isset($_POST['makm']) ? $_POST['makm'] : '';
$namekm = isset($_POST['namekm']) ? $_POST['namekm'] : '';
$getAllProducts = $insertDetailPromoPage->getAllProducts($makm);

if (isset($_POST['masp']) && isset($_POST['makm'])) {
    if ($_POST['masp'] == 0) {
        $error = "Vui lòng chọn sản phẩm cần áp dụng khuyến mãi.";
    } else {
        $makm = $_POST['makm'];
        $masp = $_POST['masp'];
        $namekm = isset($_POST['namekm']) ? $_POST['namekm'] : '';
        $insertDetailPromoPage->insertDiscountedProduct($makm, $masp);
        $success = "Sản phẩm đã được áp dụng khuyến mãi thành công.";

        $getAllProducts = $insertDetailPromoPage->getAllProducts($makm);
    }
}

require_once $ROOT_ADMIN . "views/promote/insertdetailpromo.php";
