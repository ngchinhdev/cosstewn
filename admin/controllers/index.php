<?php
    session_start();
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/adminOauth/admin.php";
    $admin = new Admin();

    if(!isset($_SESSION['admin'])) return;

    $isAdmin = $admin->getAdmin($_SESSION['admin']);

    if (!($isAdmin['mavt'] === 1)) {
        return;    
    } else {
        include_once("../views/layout/header.php");

        include_once("../views/dashboard/dashboard.php");

        include_once("../views/layout/footer.php");
    }
?>
