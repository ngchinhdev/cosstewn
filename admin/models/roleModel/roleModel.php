<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Role extends PDOModel {
        function getAllRole() {
            $sql = "SELECT * FROM vaitro";

            return $this->pdoQuery($sql);
        }
    }
 ?>