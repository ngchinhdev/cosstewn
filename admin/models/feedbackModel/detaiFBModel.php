<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class DetailFBPage extends PDOModel
{
    function getInfoFeedbackByMasp($masp, $page_size, $pageNumber)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT f.*, u.ho_ten
        FROM binhluan f
        JOIN taikhoan u ON f.matk = u.matk
        WHERE f.masp = ?";

        $sql .= " LIMIT $startRow, $page_size";

        return $this->pdoQuery($sql, $masp);
    }

    function countColumnfbByMasp($masp){
        $sql = "SELECT COUNT(*) FROM binhluan WHERE masp = ?";
        return $this->pdoQueryValue($sql, $masp);
    }

    function updateStatusfbByMabl($status, $mabl){
        $sql = "UPDATE binhluan SET trang_thai = ? WHERE mabl = ?";
        $this->pdoExecute($sql, $status, $mabl);
    }
}
