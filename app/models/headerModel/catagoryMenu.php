<?php
    require_once "../../configs/pdoModel.php";
    
    class CatagoryMenu extends PDOModel {
        function getTypeCatagory() {
            $sql = "SELECT * FROM loaihang";
            
            return $this->pdoQuery($sql);
        }
    }
?>