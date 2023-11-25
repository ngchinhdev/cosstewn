<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Dashboard extends PDOModel {
        function getQuantityUSer() {
            $sql = "SELECT COUNT(matk) so_luong FROM taikhoan";

            return $this->pdoQueryValue($sql);
        }

        function getQuantityCategory() {
            $sql = "SELECT COUNT(maloai) so_luong FROM loaihang";

            return $this->pdoQueryValue($sql);
        }

        function getQuantityProduct() {
            $sql = "SELECT COUNT(masp) so_luong FROM sanpham";

            return $this->pdoQueryValue($sql);
        }

        function getQuantityOrder() {
            $sql = "SELECT COUNT(madh) so_luong FROM donhang";

            return $this->pdoQueryValue($sql);
        }

        function getTopInventory() {
            $sql = "SELECT * FROM sanpham sp JOIN (SELECT masp, GROUP_CONCAT(hinh_anh) hinh_anh 
                    FROM hinhanh GROUP BY masp) ha ON sp.masp = ha.masp ORDER BY so_luong DESC LIMIT 5";

            return $this->pdoQuery($sql);
        }
    }
 ?>