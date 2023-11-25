<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/categoryModel/categoryModel.php";
    $category = new Category();

    $all_categories = $category->getAllCategories();

    require_once $ROOT_ADMIN . "views/category/category.php";
?>