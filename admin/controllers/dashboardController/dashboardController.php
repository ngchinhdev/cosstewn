<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/dashboardModel/dashboardModel.php";
    $dashboard = new Dashboard();

    $user_quantity = $dashboard->getQuantityUSer();
    $category_quantity = $dashboard->getQuantityCategory();
    $prod_quantity = $dashboard->getQuantityProduct();
    $order_quantity = $dashboard->getQuantityOrder();
    $top_inventory = $dashboard->getAlmostOverProducts();
    $top_sale_category = $dashboard->getTopSaleCategory();

    require_once $ROOT_ADMIN . "views/dashboard/dashboard.php";
?>