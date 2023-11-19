<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/profileModel/profileModel.php";
    $profile = new Profile();

    if(isset($_GET['u'])) {
        $_SESSION["user_id"] = $_GET['u'];
        $cur_user = $profile->getCurUser($_SESSION["user_id"]);
        extract($cur_user);
        $_SESSION["name"] = $ho_ten;
        $_SESSION["email"] = $email;
        $_SESSION["avatar"] = $hinh_anh;
    }

    if(isset($_POST['save'])) {
        extract($_POST);
        extract($_FILES);
        
        if(!empty($avatar)) {
            $destination = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/app/imgs/" . $avatar['name'];
            if(move_uploaded_file($avatar['tmp_name'], $destination)) {
                $profile->updateInfoUser($name, $email, $phone, $address, $avatar['name'], $pass, 38);
            } 
        }
    }
?>