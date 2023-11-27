<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/addproductModel/addproductModel.php";
$addproducts = new AddProducts();

if (isset($image_variation4) || isset($image_variation3) || isset($image_variation2) || isset($image_variation1) || isset($_POST['statusproduct']) || isset($_POST['brandproduct']) || isset($_POST['describeprd']) || isset($_POST['quantityprd']) || isset($_POST['priceNow']) || isset($_POST['priceOrigin']) || isset($_POST['nameproduct'])) {
    $nameProduct = isset($_POST['nameproduct']) ? $_POST['nameproduct'] : '';
    $priceOrigin = isset($_POST['priceOrigin']) ? $_POST['priceOrigin'] : '';
    $priceNow = isset($_POST['priceNow']) ? $_POST['priceNow'] : '';
    $quantityPrd = isset($_POST['quantityprd']) ? $_POST['quantityprd'] : '';
    $describePrd = isset($_POST['describeprd']) ? $_POST['describeprd'] : '';
    $brandProduct = isset($_POST['brandproduct']) ? $_POST['brandproduct'] : '';
    $statusProduct = isset($_POST['statusproduct']) ? $_POST['statusproduct'] : '';
    $imageVariation1Name = isset($_FILES['image_variation1']['name']) ? $_FILES['image_variation1']['name'] : '';
    $imageVariation2Name = isset($_FILES['image_variation2']['name']) ? $_FILES['image_variation2']['name'] : '';
    $imageVariation3Name = isset($_FILES['image_variation3']['name']) ? $_FILES['image_variation3']['name'] : '';
    $imageVariation4Name = isset($_FILES['image_variation4']['name']) ? $_FILES['image_variation4']['name'] : '';
    $error = "";
    $success = "";

    if (empty($imageVariation4Name) || empty($imageVariation3Name) || empty($imageVariation2Name) ||  empty($imageVariation1Name) || empty($describePrd) || empty($quantityPrd) || empty($nameProduct) || empty($priceOrigin) || empty($priceNow)) {
        $error = "Vui lòng điền đầy đủ thông tin sản phẩm.";
    } else {
        $masp = $addproducts->insertProduct($nameProduct, $priceOrigin, $priceNow, $quantityPrd, $describePrd, $brandProduct, $statusProduct);
        for ($i = 1; $i <= 4; $i++) {
            $imageVariation = '';
            if (!empty($_FILES['image_variation' . $i]['name'])) {
                $imageVariation = $_FILES['image_variation' . $i]['name'];
                $imageVariation_tmp = $_FILES['image_variation' . $i]['tmp_name'];
                // Thư mục lưu trữ ảnh biến thể images
                $variation_upload_directory = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/" . "app/imgs/imgs-product/";

                // Di chuyển ảnh tải lên vào thư mục lưu trữ
                move_uploaded_file($imageVariation_tmp, $variation_upload_directory . $imageVariation);

                $addproducts->insertImagesByProduct($imageVariation, $masp);
            }
        }
        $success = "Sản phẩm đã được thêm thành công.";
    }
}

require_once $ROOT_ADMIN . "views/addproduct/addproduct.php";
