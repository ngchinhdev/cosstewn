<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class Products extends PDOModel
{
    function getAllProducts($page_size, $pageNumber)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT sanpham.*, hinhanh.hinh_anh
        FROM sanpham
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp ORDER BY sanpham.maloai ASC";

        $sql .= " LIMIT $startRow, $page_size";
        return $this->pdoQuery($sql);
    }

    function countProducts()
    {
        $sql = "SELECT COUNT(*), hinhanh.hinh_anh
        FROM sanpham
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp ORDER BY sanpham.maloai ASC";

        return $this->pdoQueryValue($sql);
    }

    function removeProductByMasp($masp){
        $sql = "DELETE FROM sanpham WHERE masp = ?";
        $this->pdoExecute($sql, $masp);
    }
}
