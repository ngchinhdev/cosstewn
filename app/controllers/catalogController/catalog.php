<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/catalogModel/catalog.php";
$catagoryProducts = new CatalogProducts();
// function tự động xóa hàng trong bảng khuyenmai nếu cột ngay_ket_thuc nhỏ hơn hoặc bằng ngày hiện tại
$catagoryProducts->autoRemoveRowOfTablekhuyenmai();

// Kiểm tra mã loại có tồn tại không
$checkMaloai = $catagoryProducts->checkMaloai($brandId);
$viewMedium = $catagoryProducts->calculateAverage();
$NamesTypeCatagory = $catagoryProducts->getTypeCatagory();
$countProducts = $catagoryProducts->getTotalProducts($brandId, $mostView, $viewMedium, $newProducts, $priceRange, $rateRange, $filterOption, $search);
$totalPages = ceil($countProducts / 12);
$productByPage = $catagoryProducts->getProductsByCategory($brandId, $mostView, $viewMedium, $newProducts, $pageNumber, $page_size = 12, $priceRange, $rateRange, $filterOption, $search);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["search"]) && !isset($_GET["redirected"])) {
    $searchValue = urlencode($_GET["search"]);
    $redirectUrl = "index.php?page=danh-muc&search={$searchValue}";

    // Thêm tham số để đánh dấu đã chuyển hướng
    $redirectUrl .= "&redirected=1";

    header("Location: " . $redirectUrl);
    exit();
}

$getNameBrand = $catagoryProducts->getNameBrand($brandId);
$banners = $catagoryProducts->getBannerCategory();