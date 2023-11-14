<?php
require_once "../../configs/pdoModel.php";

$maloai = isset($_GET['maloai']) ? $_GET['maloai'] : 1;

class CatalogProducts extends PDOModel
{
    function getProductsByCategory($maloai)
    {
        $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh
        FROM sanpham
        INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
            LIMIT 4
        ) AS hinhanh ON sanpham.masp = hinhanh.masp
        WHERE sanpham.maloai = ? AND sanpham.an_hien = 1";

        return $this->pdoQuery($sql, $maloai);
    }
}
