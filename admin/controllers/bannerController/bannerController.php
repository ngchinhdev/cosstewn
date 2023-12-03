<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/bannerModel/bannerModel.php";
    $banner = new Banner();

    $cmp_array = array(
        0 => 'Banner Slider',
        1 => 'Banner Brand',
        2 => 'Banner Partner',
        3 => 'Last Banner Home',
        4 => 'Banner Category',
        5 => 'Banner Detail'
    );

    $all_types  = $banner->getAllTypesBanner();

    require_once $ROOT_ADMIN . "views/banner/banner.php";
?>