<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/" . "configs/pdoModel.php";
    
    class Login extends PDOModel {
        function getInfoUser($email) { 
            $sql = "SELECT * FROM `taikhoan` WHERE email = ?";
            
            return $this->pdoQueryOne($sql, $email);
        }
    }
?>