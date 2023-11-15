<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/loginModel/loginModel.php";
    $login = new Login();

    if(isset($_POST['submit'])) {
        extract($_POST);

        $user = $login->getInfoUser($email);
        $correctPassword = $user['mat_khau'] === $password;

        if($user && $correctPassword) {
            $_SESSION['data_user']['email'] = $user['email'];
            $_SESSION['data_user']['name'] = $user['ho_ten'];
            $_SESSION['data_user']['avatar'] = $user['hinh_anh'];
            header("Location: ../index.php?page=lich-su-mua");
            exit();
        } else {
            $_SESSION['error'] = "Sai tai khoan hoac mat khau";
            header("Location: ../index.php?page=dang-nhap");
            exit();
        }
    } else {
        //  var_dump($_SESSION['data_user']);
        echo "<script>window.location.href = '/cosstewn/app/controllers/index.php?page=lich-su-mua';</script>";
        // header("Location: ../index.php?page=lich-su-mua");
        exit();
    }
?>