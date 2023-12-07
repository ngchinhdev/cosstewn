<?php
    if(!isset($_COOKIE['user_id'])) return '';
?>

<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/profileModel/profileModel.php";
    $profile = new Profile();
    if(isset($_POST['logout'])) {
        setcookie('user_id', base64_decode($_COOKIE['user_id']), time() - (86400 * 30), "/");
        session_destroy();
        header("Location: ../index.php?page=dang-nhap");
        exit();
    }

    if(isset($_POST['save'])) {
        extract($_POST);
        extract($_FILES);

        if(!empty($avatar)) {
            $destination = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/app/imgs/" . $avatar['name'];
            if(move_uploaded_file($avatar['tmp_name'], $destination)) {
                $profile->updateInfoUserAvt($name, $email, $phone, $address, $avatar['name'], $_GET['u']);
                header("Location: ../index.php?page=ho-so&u=". $_COOKIE['user_id']);
                return;
            } 
        }

        $profile->updateInfoUser($name, $email, $phone, $address, base64_decode($_COOKIE["user_id"]));
        header("Location: ../index.php?page=ho-so&u=".$_COOKIE['user_id']);
        exit();
    }

    if(isset($_GET['u']) && $_GET['u']) {
        // If 'u' parameter is set and not null
        $_SESSION["user_id"] = base64_decode($_GET['u']);
    } elseif(isset($_COOKIE['user_id']) && $_COOKIE['user_id']) {
        // If 'u' is null, use 'user_id' cookie
        $_SESSION["user_id"] = base64_decode($_COOKIE['user_id']);
    }

    $cur_user = $profile->getCurUser($_SESSION["user_id"]);
    extract($cur_user);
    $_SESSION["name"] = $ho_ten;
    $_SESSION["email"] = $email;
    $_SESSION["avatar"] = $hinh_anh;
?>