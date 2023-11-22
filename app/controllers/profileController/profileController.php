<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/profileModel/profileModel.php";
    $profile = new Profile();
    if(isset($_POST['logout'])) {
        setcookie('user_id', base64_encode($_GET['u']), time() - (86400 * 30), "/");
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
                $profile->updateInfoUserAvt($name, $email, $phone, $address, $avatar['name'], $pass, $_SESSION["user_id"]);
                header("Location: ../index.php?page=ho-so&u=".base64_encode($_SESSION['user_id']));
                return;
            } 
        }

        $profile->updateInfoUser($name, $email, $phone, $address, $pass, $_SESSION["user_id"]);
        header("Location: ../index.php?page=ho-so&u=".base64_encode($_SESSION['user_id']));
        exit();
    }

    if(isset($_GET['u']) && $_GET['u']) {
        $_SESSION["user_id"] = base64_decode($_GET['u']);
        $cur_user = $profile->getCurUser($_SESSION["user_id"]);
        // if(empty($cur_user)) {
        //     $_SESSION['error'] = "Không hợp lệ!";
        //     return;
        // }
        extract($cur_user);
        $_SESSION["name"] = $ho_ten;
        $_SESSION["email"] = $email;
        $_SESSION["avatar"] = $hinh_anh;
    }

?>