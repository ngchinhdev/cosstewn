<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/categoryModel/categoryModel.php";
$category = new Category();
$cur_page = isset($_GET['pagNum']) ? $_GET['pagNum'] : 1;
$per_page = 10;
$offset = ($cur_page - 1) * $per_page;
$total_records = $category->getCountRecords();
$total_pages = ceil($total_records / $per_page);
$all_categories = $category->getCategories($per_page, $offset);
$cur_records = count($all_categories);

require_once $ROOT_ADMIN . "views/category/category.php";
