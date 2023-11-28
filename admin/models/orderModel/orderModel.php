<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

class OrderPage extends PDOModel
{
    function getInfoTableOrder($page_size, $pageNumber)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT donhang.*, sanpham.*, chitietdonhang.so_luong as soluongctdh
        FROM donhang
        INNER JOIN chitietdonhang ON donhang.madh = chitietdonhang.madh
        INNER JOIN sanpham ON chitietdonhang.masp = sanpham.masp 
        ORDER BY donhang.madh DESC";
        $sql .= " LIMIT $startRow, $page_size";

        return $this->pdoQuery($sql);
    }

    function countColumnTaleOrder()
    {
        $sql = "SELECT COUNT(*) FROM donhang";
        return $this->pdoQueryValue($sql);
    }

    function updateStatusfbByMadh($status, $madh)
    {
        $sql = "UPDATE donhang SET trang_thai = ? WHERE madh = ?";
        $this->pdoExecute($sql, $status, $madh);
    }
}
