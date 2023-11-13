<?php
    require_once "../models/catalogController/catalog.php";
    $catalog = new Catalog();
    
    $flash_sale_prods = $catalog->getFlashSaleProducts();
?>