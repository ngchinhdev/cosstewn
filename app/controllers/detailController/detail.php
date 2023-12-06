<?php
require_once "../models/detailModel/detail.php";
$detailProducts = new DetailProducts();
$infoByProducts = $detailProducts->getInfoProducts($masp);
$similarProducts = $detailProducts->getSimilarProducts($maloai, $masp);
$promoProduct = $detailProducts->getPromoProductByMasp($masp);
$banners = $detailProducts->getBannersDetail();
if(isset($_COOKIE['user_id']) && $_COOKIE['user_id']) {
    $cur_user = $detailProducts->getCurUser(base64_decode($_COOKIE['user_id']));
}

