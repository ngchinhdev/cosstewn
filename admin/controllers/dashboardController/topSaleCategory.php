<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/dashboardModel/dashboardModel.php";
    $dashboard = new Dashboard();

    $top_sale_category = $dashboard->getTopSaleCategory();
    header('Content-Type: application/json');
    echo json_encode($top_sale_category);

?>