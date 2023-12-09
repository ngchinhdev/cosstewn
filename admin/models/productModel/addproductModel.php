<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class AddProducts extends PDOModel
{
    function insertProduct($tensp, $giagoc, $giatien, $soluong, $mota, $maloai, $anhien)
    {
        $sql = "INSERT INTO sanpham 
        (ten_sp, gia_goc, gia_tien, so_luong, mo_ta, maloai, an_hien) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        return $this->pdoExecute($sql, $tensp, $giagoc, $giatien, $soluong, $mota, $maloai, $anhien);
    }

    function insertImagesByProduct($images, $masp)
    {
        $sql = "INSERT INTO hinhanh
        (hinh_anh, masp) 
        VALUES (?, ?)";
        $this->pdoExecute($sql, $images, $masp);
    }

    function getAllBrand(){
        $sql = "SELECT * FROM loaihang";

        return $this->pdoQuery($sql);
    }
}
