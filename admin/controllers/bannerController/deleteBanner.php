<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/bannerModel/bannerModel.php";
    $banner = new Banner();

    if(isset($_POST['type']) && $_POST['type'] === 'delete') {
        $banner->deleteBanner($_POST['id']);

        header('Content-Type: application/json');
        echo json_encode(["message" => "Thành công!"]);
    }

?>