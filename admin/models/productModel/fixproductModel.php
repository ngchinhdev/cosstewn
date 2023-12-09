<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class FixProducts extends PDOModel
{
    function getProductByMasp($masp)
    {
        $sql = "SELECT sanpham.*, hinhanh.hinh_anh
        FROM sanpham
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp
        WHERE sanpham.masp = ?";

        return $this->pdoQueryOne($sql, $masp);
    }

    function updateInfoByProduct($nameProduct, $priceOrigin, $priceNow, $quantityPrd, $describePrd, $brandProduct, $statusProduct, $masp)
    {
        $sql = "UPDATE sanpham SET 
        ten_sp = ?, gia_goc = ?, gia_tien = ?, 
        so_luong = ?, mo_ta = ?, maloai = ?, an_hien = ? 
        WHERE masp = ?";
        $this->pdoExecute($sql, $nameProduct, $priceOrigin, $priceNow, $quantityPrd, $describePrd, $brandProduct, $statusProduct, $masp);
    }

    function updateImagesByProduct($imageVariation, $image_id)
    {
        $sql = "UPDATE hinhanh SET hinh_anh = ? WHERE maha = ?";
        $this->pdoExecute($sql, $imageVariation,  $image_id);
    }

    function getImagesVariationProducts($masp)
    {
        $sql = "SELECT * FROM hinhanh WHERE masp = ?";

        return $this->pdoQuery($sql, $masp);
    }

    function getAllBrand(){
        $sql = "SELECT * FROM loaihang";

        return $this->pdoQuery($sql);
    }
}
