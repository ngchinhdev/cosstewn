<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/productModel/fixproductModel.php";
$fixProducts = new FixProducts();
$masp = isset($_POST['masp']) ? $_POST['masp'] : '';
$productByMasp = $fixProducts->getProductByMasp($masp);
if (isset($_FILES['image_variation']) || isset($_POST['statusproduct']) || isset($_POST['brandproduct']) || isset($_POST['describeprd']) || isset($_POST['quantityprd']) || isset($_POST['priceNow']) || isset($_POST['priceOrigin']) || isset($_POST['nameproduct'])) {
    $nameProduct = isset($_POST['nameproduct']) ? $_POST['nameproduct'] : '';
    $priceOrigin = isset($_POST['priceOrigin']) ? $_POST['priceOrigin'] : '';
    $priceNow = isset($_POST['priceNow']) ? $_POST['priceNow'] : '';
    $quantityPrd = isset($_POST['quantityprd']) ? $_POST['quantityprd'] : '';
    $describePrd = isset($_POST['describeprd']) ? $_POST['describeprd'] : '';
    $brandProduct = isset($_POST['brandproduct']) ? $_POST['brandproduct'] : '';
    $statusProduct = isset($_POST['statusproduct']) ? $_POST['statusproduct'] : '';
    $masp = $_POST['masp'];
    $error = "";
    $success = "";
    if (empty($describePrd) || empty($quantityPrd) || empty($nameProduct) || empty($priceOrigin) || empty($priceNow)) {
        $error = "Vui lòng không để trống thông tin sản phẩm.";
    } else {
        $fixProducts->updateInfoByProduct($nameProduct, $priceOrigin, $priceNow, $quantityPrd, $describePrd, $brandProduct, $statusProduct, $masp);
        $imagesVariationProducts = $fixProducts->getImagesVariationProducts($masp);
        for ($i = 0; $i < count($imagesVariationProducts); $i++) {
            $image_id = $imagesVariationProducts[$i]['maha'];

            if (!empty($_FILES['image_variation']['name'][$i])) {
                $imageVariation =  $_FILES['image_variation']['name'][$i];
                $imageVariation_tmp = $_FILES['image_variation']['tmp_name'][$i];

                $variation_upload_directory = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/" . "app/imgs/imgs-product/";
                move_uploaded_file($imageVariation_tmp, $variation_upload_directory . $imageVariation);
            } else {
                $imageVariation = $imagesVariationProducts[$i]['hinh_anh'];
            }

            $fixProducts->updateImagesByProduct($imageVariation, $image_id);
        }

        $success = "Sản phẩm đã được cập nhật thành công.";
    }
    $productByMasp = $fixProducts->getProductByMasp($masp);
}
require_once $ROOT_ADMIN . "views/product/fixproduct.php";
