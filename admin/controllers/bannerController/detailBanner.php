<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/bannerModel/bannerModel.php";
    $banner = new Banner();

    if(isset($_POST['type']) && $_POST['type'] === 'detail') {
        $details = $banner->getBannerDetail($_POST['id']);

        header('Content-Type: application/json');
        echo json_encode($details);
    }

?>