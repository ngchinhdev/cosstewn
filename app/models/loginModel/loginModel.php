<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/" . "configs/pdoModel.php";
    
    class Login extends PDOModel {
        function getInfoUser($email) { 
            $sql = "SELECT * FROM `taikhoan` WHERE email = ?";
            
            return $this->pdoQueryOne($sql, $email);
        }

        function updatePassword($email, $pass) {
            $sql = "UPDATE taikhoan SET mat_khau = ? WHERE email = ?";

            return $this->pdoExecute($sql, $pass, $email);
        }
    }
?>