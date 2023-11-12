<?php
    require_once "../../configs/pdoModel.php";
    
    class ProductHome extends PDOModel {
        function getFlashSaleProducts() {
            $sql = "SELECT * FROM sanpham ORDER BY ((gia_goc - gia_tien) / gia_goc) DESC LIMIT 5";
            
            return $this->pdoQuery($sql);
        }
    }
?>