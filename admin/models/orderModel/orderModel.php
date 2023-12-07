<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

class OrderPage extends PDOModel
{
    function getInfoTableOrder($filterOrder)
    {
        $sql = "SELECT donhang.*, sanpham.*, chitietdonhang.so_luong as soluongctdh
        FROM donhang
        INNER JOIN chitietdonhang ON donhang.madh = chitietdonhang.madh
        INNER JOIN sanpham ON chitietdonhang.masp = sanpham.masp 
        ";
        if ($filterOrder == 1) {
            $sql .= " WHERE donhang.trang_thai = 0 ";
        } else if ($filterOrder == 2) {
            $sql .= " WHERE donhang.trang_thai = 1 ";
        } else if ($filterOrder == 0) {
            $sql .= " WHERE donhang.trang_thai = 1 OR donhang.trang_thai = 0";
        }

        $sql .= " ORDER BY donhang.madh DESC ";
        return $this->pdoQuery($sql);
    }

    function countQuantityOrder($madh)
    {
        $sql = "SELECT COUNT(*)
        FROM donhang
        INNER JOIN chitietdonhang ON donhang.madh = chitietdonhang.madh
        INNER JOIN sanpham ON chitietdonhang.masp = sanpham.masp 
        WHERE chitietdonhang.madh = ?";

        return $this->pdoQueryValue($sql, $madh);
    }

    function countColumnTaleOrder()
    {
        $sql = "SELECT COUNT(*)
        FROM donhang
        INNER JOIN chitietdonhang ON donhang.madh = chitietdonhang.madh
        INNER JOIN sanpham ON chitietdonhang.masp = sanpham.masp";
        return $this->pdoQueryValue($sql);
    }

    function updateStatusfbByMadh($status, $madh)
    {
        $sql = "UPDATE donhang SET trang_thai = ? WHERE madh = ?";
        $this->pdoExecute($sql, $status, $madh);
    }
}
