<?php
require_once "../models/detailModel/detail.php";
$detailProducts = new DetailProducts();
$infoByProducts = $detailProducts->getInfoProducts($masp);
$similarProducts = $detailProducts->getSimilarProducts($maloai, $masp);
$promoProduct = $detailProducts->getPromoProductByMasp($masp);
$banners = $detailProducts->getBannersDetail();

