<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class User extends PDOModel {
        function getAllUsers() {
            $sql = "SELECT * FROM taikhoan";

            return $this->pdoQuery($sql);
        }
    }
 ?>