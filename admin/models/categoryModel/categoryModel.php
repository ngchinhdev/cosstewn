<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Category extends PDOModel {
        function getAllCategories() {
            $sql = "SELECT * FROM loaihang";

            return $this->pdoQuery($sql);
        }
    }
 ?>