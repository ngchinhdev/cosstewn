<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/registerModel/registerModel.php";
    $register = new Register();

    if(isset($_POST['submit'])) {
        extract($_POST);
        var_dump($_POST);
        echo ucwords($ho . ' ' . $ten);
        $name = ucwords($ho . ' ' . $ten);

        $register->addNewUser($name, $email, $phone, $address, $repass, '');
    } else {
        var_dump($_SESSION['data_user']);
    }
?>