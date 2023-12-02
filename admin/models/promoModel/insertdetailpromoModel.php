<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class InsertDetailPromoPage extends PDOModel
{
    function getAllProducts($makm)
    {
        $sql = "SELECT sanpham.*
        FROM sanpham
        LEFT JOIN chitietkhuyenmai ON sanpham.masp = chitietkhuyenmai.masp
            AND chitietkhuyenmai.makm = ?
        WHERE chitietkhuyenmai.masp IS NULL";
        return $this->pdoQuery($sql, $makm);
    }

    function insertDiscountedProduct($makm, $masp)
    {
        $sql = "INSERT INTO chitietkhuyenmai (makm, masp) 
        VALUES (?,?)";

        $this->pdoExecute($sql, $makm, $masp);
    }
}
