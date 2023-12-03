<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Banner extends PDOModel {
        function getAllTypesBanner() {
            $sql = "SELECT loai FROM `banner` GROUP BY loai";

            return $this->pdoQuery($sql);
        }

        function getBannerDetail($id) {
            $sql = "SELECT * FROM banner WHERE loai = ?";

            return $this->pdoQuery($sql, $id);
        }

        function updateBanner($path, $id) {
            $sql = "UPDATE banner SET duong_dan = ? WHERE mabn = ?";

            return $this->pdoExecute($sql, $path, $id);
        }

        function deleteBanner($id) {
            $sql = "DELETE FROM banner WHERE mabn = ?";

            return $this->pdoExecute($sql, $id);
        }

        function addNewBanner($path, $type) {
            $sql = "INSERT INTO banner (duong_dan, loai) 
                    VALUES (?, ?)";

            return $this->pdoExecute($sql, $path, $type);
        }
    }
 ?>