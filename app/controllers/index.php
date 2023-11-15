<?php
    session_start();
    // $ROOT_URL = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/";
    require_once "headerController/TypeCatagory.php";
    require_once "../views/layout/header.php";

    if(isset($_GET["page"])) {
        switch($_GET['page']) {
            case "danh-muc": 
                require_once "catalogController/catalog.php";
                require_once "../views/category/category.php";
                break;
            case "san-pham": 
                require_once "detailController/detail.php";
                require_once "../views/detail/detail.php";
                break;
            case "dang-nhap": 
                require_once "registerController/oauthFacebookController.php";
                require_once "registerController/oauthGoogleController.php";
                require_once "../views/login/login.php";
                break;
            case "dang-ky": 
                require_once "registerController/oauthFacebookController.php";
                require_once "registerController/oauthGoogleController.php";
                require_once "../views/register/register.php";
                break;
            case "gio-hang": 
                require_once "../views/cart/cart.php";
                break;
            case "lien-he": 
                require_once "../views/contact/contact.php";
                break;
            case "thanh-toan": 
                require_once "../views/checkout/checkout.php";
                break;
            case "lich-su-mua": 
                require_once "../views/profile/profile.php";
                break;
            default:
                require_once "homeController/productHome.php";
                require_once "../views/home/home.php";
        }
    } else {
        require_once "homeController/productHome.php";
        require_once "../views/home/home.php";
    }

    require_once "../views/layout/footer.php";
?>