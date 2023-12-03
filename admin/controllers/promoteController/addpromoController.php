<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/promoModel/addpromoModel.php";
$addpromoPage = new AddPromoPage();

if (isset($_POST['namepromo']) || isset($_POST['pricepromo']) || isset($_POST['startdate']) || isset($_POST['enddate'])) {
    $namepromo = isset($_POST['namepromo']) ? $_POST['namepromo'] : '';
    $pricepromo = isset($_POST['pricepromo']) ? $_POST['pricepromo'] : '';

    // Định dạng ngày bắt đầu
    $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
    $startdate = new DateTime($startdate);
    $startdateFormat = $startdate->format('Y-m-d H:i:s');

    // Định dạng ngày kết thúc
    $enddate = isset($_POST['enddate']) ? $_POST['enddate'] : '';
    $enddate = new DateTime($enddate);
    $enddateFormat = $enddate->format('Y-m-d H:i:s');


    if(empty($namepromo) || empty($pricepromo)){
        $error = "Vui lòng điền đầy đủ thông tin khuyến mãi.";
    }else{
        $addpromoPage->insertPromo($namepromo, $pricepromo, $startdateFormat, $enddateFormat);
        $success = "Khuyến mãi đã được thêm thành công.";
    }
}


require_once $ROOT_ADMIN . "views/promote/addpromo.php";
