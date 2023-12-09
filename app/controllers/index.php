<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . '/cosstewn/configs/urls.php';
    require_once $URL_APP_CONTROLLER . "loginController/matchUser.php";
    if(isset($_GET['u'])) {
        if($_GET['u']) {
            if((isset($_COOKIE['user_id']) && $_GET['u'] !== $_COOKIE['user_id']) || !in_array(base64_decode($_GET['u']), $all_id)) {
                echo "<script>window.location.href='/cosstewn/app/controllers/index.php';</script>";
                exit();
            }
        }
        if(!$_GET['u']) {
            echo "<script>window.location.href='/cosstewn/app/controllers/index.php';</script>";
            exit();
        }
        setcookie('user_id', $_GET['u'], time() + (86400 * 30), "/");
    } 
    require_once $URL_APP_CONTROLLER . "cartControllers/cart.php";
    require_once $URL_APP_CONTROLLER . "catalogController/catalog.php";
    require_once $URL_APP_VIEW . "layout/header.php";

    if(isset($_GET["page"])) {
        switch($_GET['page']) {
            case "danh-muc": 
                require_once $URL_APP_CONTROLLER . "catalogController/catalog.php";
                require_once $URL_APP_VIEW . "category/category.php";
                break;
            case "san-pham": 
                require_once $URL_APP_CONTROLLER . "detailController/feedback.php";
                require_once $URL_APP_CONTROLLER . "detailController/detail.php";
                require_once $URL_APP_VIEW . "detail/detail.php";
                break;
            case "dang-nhap": 
                require_once $URL_APP_CONTROLLER . "registerController/oauthFacebookController.php";
                require_once $URL_APP_CONTROLLER . "registerController/oauthGoogleController.php";
                require_once $URL_APP_VIEW . "../views/login/login.php";
                break;
            case "dang-ky": 
                require_once $URL_APP_CONTROLLER . "registerController/oauthFacebookController.php";
                require_once $URL_APP_CONTROLLER . "registerController/oauthGoogleController.php";
                require_once $URL_APP_VIEW . "register/register.php";
                break;
            case "gio-hang": 
                require_once $URL_APP_CONTROLLER . "cartControllers/cart.php";
                require_once $URL_APP_VIEW . "cart/cart.php";
                break;
            case "lien-he":
                require_once $URL_APP_CONTROLLER . "contactController/contactController.php";
                require_once $URL_APP_VIEW . "contact/contact.php";
                break;
            case "thanh-toan": 
                require_once $URL_APP_CONTROLLER . "checkoutController/checkoutController.php";
                require_once $URL_APP_VIEW . "checkout/checkout.php";
                break;
            case "lich-su-mua": 
                require_once $URL_APP_CONTROLLER . "historyController/historyController.php";
                require_once $URL_APP_VIEW . "history/history.php";
                break;
            case "ho-so": 
                require_once $URL_APP_CONTROLLER . "profileController/profileController.php";
                require_once $URL_APP_VIEW . "profile/profile.php";
                break;
            case "dat-hang-thanh-cong": 
                require_once $URL_APP_VIEW . "checkout/success.php";
                break;
            case "quen-mat-khau": 
                require_once $URL_APP_VIEW . "login/forgot.php";
                break;
            case "thay-doi-mat-khau": 
                require_once $URL_APP_VIEW . "login/change-pass.php";
                break;
            default:
                require_once $URL_APP_CONTROLLER . "homeController/productHome.php";
                require_once $URL_APP_VIEW . "home/home.php";
        }
    } else {
        require_once $URL_APP_CONTROLLER . "homeController/productHome.php";
        require_once $URL_APP_VIEW . "home/home.php";
    }

    require_once $URL_APP_VIEW . "layout/footer.php";
?>