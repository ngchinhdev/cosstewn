<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/productModel/productModel.php";
$products = new Products();
$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
$page_size = 10;
$startRow = ($pageNumber - 1) * $page_size;
$countProducts = $products->countProducts();
$totalPages = ceil($countProducts / 10);
$allProducts = $products->getAllProducts($page_size, $pageNumber);
if (isset($_POST['removemasp'])) {
    $removemasp = $_POST['removemasp'];
    $pageNumber = $_POST['currentpage'];
    $products->removeProductByMasp($removemasp);


    // sau khi xóa xong cập nhật lại sản phẩm
    $startRow = ($pageNumber - 1) * $page_size;
    $countProducts = $products->countProducts();
    $totalPages = ceil($countProducts / 10);
    $allProducts = $products->getAllProducts($page_size, $pageNumber);
}
require_once $ROOT_ADMIN . "views/product/product.php";
