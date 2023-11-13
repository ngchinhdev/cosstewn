<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/" . "configs/pdoModel.php";
    
    class Register extends PDOModel {
        function addNewUser($name, $email, $phone, $address, $pass, $avt) {
            $sql = "INSERT INTO taikhoan (ho_ten, email, so_dien_thoai, dia_chi, mat_khau, hinh_anh, mavt)
                    VALUES(?, ?, ?, ?, ?, ?, ?)";

            return $this->pdoExecute($sql, $name, $email, $phone, $address, $pass, $avt, 2);
        }
    }
?>