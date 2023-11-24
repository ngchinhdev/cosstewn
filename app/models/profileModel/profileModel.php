<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/" . "configs/pdoModel.php";
    
    class Profile extends PDOModel {
        function getCurUser($user_id) { 
            $sql = "SELECT * FROM `taikhoan` WHERE matk = ?";
            
            return $this->pdoQueryOne($sql, $user_id);
        }

        function updateInfoUser($name, $email, $phone, $address, $pass, $user_id) {
            $sql = "UPDATE taikhoan SET ho_ten = ?, email = ?, so_dien_thoai = ?,
                    dia_chi = ?, mat_khau = ? WHERE matk = ?";

            return $this->pdoExecute($sql, $name, $email, $phone, $address, $pass, $user_id);
        }

        function updateInfoUserAvt($name, $email, $phone, $address, $pass, $avatar, $user_id) {
            $sql = "UPDATE taikhoan SET ho_ten = ?, email = ?, so_dien_thoai = ?,
                    dia_chi = ?, hinh_anh = ?, mat_khau = ? WHERE matk = ?";

            return $this->pdoExecute($sql, $name, $email, $phone, $address, $pass, $avatar, $user_id);
        }
    }
?>