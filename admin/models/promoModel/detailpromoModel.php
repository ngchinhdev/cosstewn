<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class DetailPromoPage extends PDOModel
{
    function getInfoProductsByMakm($makm, $page_size, $pageNumber)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT chitietkhuyenmai.masp, sanpham.ten_sp
        FROM chitietkhuyenmai
        JOIN sanpham ON chitietkhuyenmai.masp = sanpham.masp
        WHERE chitietkhuyenmai.makm = ?";

        $sql .= " LIMIT $startRow, $page_size";

        return $this->pdoQuery($sql, $makm);
    }

    function countColumnDetailPromo($makm)
    {
        $sql = "SELECT COUNT(*) FROM chitietkhuyenmai WHERE makm = ?";
        return $this->pdoQueryValue($sql, $makm);
    }

    function removeColumnDetailPromo($masp, $makm){
        $sql = "DELETE FROM `chitietkhuyenmai` WHERE makm = ? AND masp = ?";

        $this->pdoExecute($sql, $makm, $masp);
    }
}
