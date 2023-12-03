<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/bannerModel/bannerModel.php";
    $banner = new Banner();

    if(isset($_POST['type']) && $_POST['type'] === 'add') {
        if(isset($_FILES['banner'])) {
            $banner_name = $_FILES['banner']['name']; 
            $tempBannerPath = $_FILES['banner']['tmp_name'];
            $destination = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/app/imgs/banners/" . $banner_name;
            move_uploaded_file($tempBannerPath, $destination);

            $banner->addNewBanner($banner_name, $_POST['id']);
        }

        header('Content-Type: application/json');
        echo json_encode(["message" => "Thành công!"]);
    }

?>