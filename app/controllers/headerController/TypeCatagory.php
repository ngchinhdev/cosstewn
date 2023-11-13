<?php
    require_once "../models/headerModel/catagoryMenu.php";
    $TypeCatagory = new CatagoryMenu();
    
    $NamesTypeCatagory = $TypeCatagory->getTypeCatagory();
?>