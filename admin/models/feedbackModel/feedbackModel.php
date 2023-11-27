<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class feedbackPage extends PDOModel
{
    function getInfoTableFB($page_size, $pageNumber)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT p.masp, p.ten_sp, COUNT(f.mabl) AS comment_count, f.*
        FROM sanpham p
        JOIN binhluan f ON p.masp = f.masp
        GROUP BY p.ten_sp
        ORDER BY comment_count DESC";

        $sql .= " LIMIT $startRow, $page_size";

        return $this->pdoQuery($sql);
    }

    function getfbNewMost($masp)
    {
        $sql = "SELECT ngay_bl FROM binhluan
                WHERE masp = ? 
                ORDER BY ngay_bl DESC LIMIT 1";
        return $this->pdoQueryOne($sql, $masp);
    }

    function getfbOldMost($masp)
    {
        $sql = "SELECT ngay_bl FROM binhluan
                WHERE masp = ? 
                ORDER BY ngay_bl ASC LIMIT 1";
        return $this->pdoQueryOne($sql, $masp);
    }

    function countColumnFB()
    {
        $sql = "SELECT COUNT(DISTINCT masp) FROM binhluan";
        return $this->pdoQueryValue($sql);
    }
}
