<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Admin extends PDOModel {
        function getAdmin($id) {
            $sql = "SELECT * FROM taikhoan WHERE matk = ?";

            return $this->pdoQueryOne($sql, $id);
        }
    }
 ?>