<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

$masp = isset($_GET['masp']) ? $_GET['masp'] : null;
$maloai = isset($_GET['maloai']) ? $_GET['maloai'] : null;
class DetailProducts extends PDOModel
{
    function getInfoProducts($masp)
    {
        $this->increaseViewCount($masp);

        $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh
        FROM sanpham
        INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp
        WHERE sanpham.masp = ? AND sanpham.an_hien = 1";

        return $this->pdoQueryOne($sql, $masp);
    }

    // tăng lượt xem khi click
    function increaseViewCount($masp)
    {
        $sql = "UPDATE sanpham SET so_luot_xem = so_luot_xem + 1 WHERE masp = ?";
        $this->pdoExecute($sql, $masp);
    }

    function getSimilarProducts($maloai, $masp)
    {
        $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh
        FROM sanpham
        INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp
        WHERE sanpham.maloai = ? AND sanpham.masp != ? AND sanpham.an_hien = 1 LIMIT 5";

        return $this->pdoQuery($sql, $maloai, $masp);
    }
}
