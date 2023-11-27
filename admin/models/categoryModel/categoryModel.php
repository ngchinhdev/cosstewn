<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Category extends PDOModel {
        function getCategories($limit, $offset) {
            $sql = "SELECT * FROM loaihang LIMIT $limit OFFSET $offset";

            return $this->pdoQuery($sql);
        }

        function getCountRecords() {
            $sql = "SELECT COUNT(maloai) FROM loaihang GROUP BY maloai";

            return $this->pdoQueryValue($sql);
        }
    }
 ?>