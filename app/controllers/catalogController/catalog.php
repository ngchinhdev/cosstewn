<?php
    require_once "../models/catalogModel/catalog.php";
    $catagoryProducts = new CatalogProducts();
    
    $productByCatagory = $catagoryProducts->getProductsByCategory($maloai);
?>