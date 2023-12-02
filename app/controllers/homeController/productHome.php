<?php
    require_once "../models/homeModel/productHome.php";
    $home = new ProductHome();
    
    $flash_sale_prods = $home->getFlashSaleProducts();
    $new_products = $home->getNewProducts();
    $best_watched_products = $home->getBestWatchedProducts();
    $for_you_products = $home->getForYouProducts();
    $hightlight_categories = $home->getHighlightCategory();

    $banners_slider = $home->getBannersSlider();
    $banners_brand = $home->getBannersBrand();
    $banners_partner = $home->getBannersPartner();
    $last_banner = $home->getLastBannerHome();
?>