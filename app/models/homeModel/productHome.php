<?php
    require_once "../../configs/pdoModel.php";
    
    class ProductHome extends PDOModel {
        function getFlashSaleProducts() {
            $sql = "SELECT * FROM sanpham ORDER BY ((gia_goc - gia_tien) / gia_goc) DESC LIMIT 5";
            
            return $this->pdoQuery($sql);
        }
        
        function getNewProducts() {
            $sql = "SELECT * FROM sanpham WHERE an_hien = 1 ORDER BY ngay_nhap DESC LIMIT 5";

            return $this->pdoQuery($sql);
        }

        function getBestSellProducts() {
            $sql = "SELECT * FROM sanpham WHERE an_hien = 1 ORDER BY so_luot_xem DESC LIMIT 5";

            return $this->pdoQuery($sql);
        }

        function getForYouProducts() {
            $sql = "SELECT * FROM sanpham WHERE an_hien = 1 ORDER BY ngay_nhap ASC LIMIT 5";

            return $this->pdoQuery($sql);
        }

        function getHighlightCategory() {
            $sql = "SELECT * FROM loaihang WHERE noi_bat = 1 AND an_hien = 1";

            return $this->pdoQuery($sql);
        }
    }
?>