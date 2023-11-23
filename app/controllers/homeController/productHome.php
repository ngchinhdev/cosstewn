<?php
    require_once "../models/homeModel/productHome.php";
    $products = new ProductHome();
    
    $flash_sale_prods = $products->getFlashSaleProducts();
    $new_products = $products->getNewProducts();
    $best_watched_products = $products->getBestWatchedProducts();
    $for_you_products = $products->getForYouProducts();
    $hightlight_categories = $products->getHighlightCategory();
?>