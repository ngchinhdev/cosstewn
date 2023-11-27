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

        function getCurCategory($cate_id) {
            $sql = "SELECT * FROM loaihang WHERE maloai = ?";

            return $this->pdoQueryOne($sql, $cate_id);
        }

        function updateCategory($name, $img, $hightlight, $showhide, $cate_id) {
            if($img) {
                $sql = "UPDATE loaihang SET ten_loai = ?, hinh_anh = ?, noi_bat = ?, an_hien = ?
                        WHERE maloai = ?";
                return $this->pdoExecute($sql, $name, $img, $hightlight, $showhide, $cate_id);
            } 

            $sql = "UPDATE loaihang SET ten_loai = ?, noi_bat = ?, an_hien = ?
                        WHERE maloai = ?";
                    return $this->pdoExecute($sql, $name, $hightlight, $showhide, $cate_id);
        }

        function addNewCategory($name, $hightlight, $showhide, $img) {
            $sql = "INSERT INTO loaihang (ten_loai, noi_bat, an_hien, hinh_anh)
                    VALUES (?, ?, ?, ?)";

            return $this->pdoExecute($sql, $name, $hightlight, $showhide, $img);
        }
    }
 ?>