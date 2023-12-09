<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/bannerModel/bannerModel.php";
    $banner = new Banner();

    $cmp_array = array(
        0 => 'Banner Slider',
        1 => 'Banner Thương Hiệu',
        2 => 'Banner Đối Tác',
        3 => 'Banner Dài Trang Chủ',
        4 => 'Banner Trang Loại Hàng',
        5 => 'Banner Trang Chi Tiết'
    );

    $all_types  = $banner->getAllTypesBanner();

    require_once $ROOT_ADMIN . "views/banner/banner.php";
?>