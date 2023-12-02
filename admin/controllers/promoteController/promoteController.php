<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/promoModel/promoModel.php";
$promoPage = new PromoPage();
$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
$page_size = 10;
$startRow = ($pageNumber - 1) * $page_size;
$countColumnPromo = $promoPage->countColumnPromo();
$totalPages = ceil($countColumnPromo / $page_size);
$infoTablePromo = $promoPage->getInfoTablePromo($page_size, $pageNumber);
require_once $ROOT_ADMIN . "views/promote/promote.php";
