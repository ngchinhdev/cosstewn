<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

$maloai = isset($_GET['maloai']) ? $_GET['maloai'] : null;
$newProducts = isset($_GET['type']) ? $_GET['type'] : null;

class CatalogProducts extends PDOModel
{
    function getProductsByCategory($brandId, $newProduct, $pageNumber, $page_size = 12)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh
        FROM sanpham
        INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp
        WHERE sanpham.an_hien = 1";
        if (!empty($brandId)) {
            $sql .= " AND sanpham.maloai = ?";
            $sql .= " LIMIT $startRow, $page_size";
            return $this->pdoQuery($sql, $brandId);
        }

        if (!empty($newProduct)) {
            $sql .= " AND sanpham.sp_moi = 1";
            $sql .= " LIMIT $startRow, $page_size";
            return $this->pdoQuery($sql);
        }
    }

    function getTotalProducts($maloai, $newProducts)
    {
        if (isset($maloai)) {
            $sql = "SELECT COUNT(*) FROM sanpham WHERE sanpham.an_hien = 1 AND sanpham.maloai = ?";
            return $this->pdoQueryValue($sql, $maloai);
        } elseif (isset($newProducts)) {
            $sql = "SELECT COUNT(*) FROM sanpham WHERE sanpham.an_hien = 1 AND sanpham.sp_moi = 1";
            return $this->pdoQueryValue($sql);
        }
    }
}
