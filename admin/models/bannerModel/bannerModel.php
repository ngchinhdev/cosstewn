<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Banner extends PDOModel {
        function getAllTypesBanner() {
            $sql = "SELECT loai FROM `banner` GROUP BY loai";

            return $this->pdoQuery($sql);
        }
    }
 ?>