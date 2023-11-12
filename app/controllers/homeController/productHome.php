<?php
    require_once "../models/homeModel/productHome.php";
    $products = new ProductHome();
    
    $flash_sale_prods = $products->getFlashSaleProducts();
?>