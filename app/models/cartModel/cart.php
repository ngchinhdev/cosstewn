<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";
class CartPage extends PDOModel
{
    function insertProductIntoCart($matk, $masp, $quantity)
    {
        $existingProduct = $this->getProductInDetailCart($masp);
        $existingUser = $this->checkInfoUserInTable($matk);
        if ($existingProduct && $existingUser) {
            $newQuantity = $existingProduct['so_luong'] + $quantity;
            $this->updateProductInDetailCart($masp, $newQuantity);
        } else {
            $sql = "INSERT INTO giohang (matk) VALUES (?)";
            $lastInsertId = $this->pdoExecute($sql, $matk);
            $this->insertProductIntoDetailCart($lastInsertId, $masp, $quantity);
        }
    }

    function insertProductIntoDetailCart($lastInsertId, $masp, $quantity)
    {
        $sql = "INSERT INTO chitietgiohang (magh, masp, so_luong) VALUES (?, ?, ?)";
        $this->pdoExecute($sql, $lastInsertId, $masp, $quantity);
    }

    function changeQuantityProductbyCart($quantity, $magh)
    {
        $sql = "UPDATE chitietgiohang SET so_luong = ? WHERE magh = ?";
        $this->pdoExecute($sql, $quantity, $magh);
    }

    function getProductInDetailCart($masp)
    {
        $sql = "SELECT * FROM chitietgiohang WHERE masp = ?";
        return $this->pdoQueryOne($sql, $masp);
    }

    function checkInfoUserInTable($matk)
    {
        $sql = "SELECT * FROM giohang WHERE matk = ?";
        return $this->pdoQueryOne($sql, $matk);
    }

    function updateProductInDetailCart($masp, $newQuantity)
    {
        $sql = "UPDATE chitietgiohang SET so_luong = ? WHERE masp = ?";
        $this->pdoExecute($sql, $newQuantity, $masp);
    }

    function getProductsByUserId($matk)
    {
        $sql = "SELECT sp.*, ctgh.so_luong as so_luong_chitiet, lh.ten_loai, GROUP_CONCAT(ha.hinh_anh) AS hinh_anh, gh.magh
        FROM sanpham sp
        INNER JOIN chitietgiohang ctgh ON sp.masp = ctgh.masp
        INNER JOIN loaihang lh ON lh.maloai = sp.maloai
        INNER JOIN giohang gh ON ctgh.magh = gh.magh
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) ha ON sp.masp = ha.masp
        WHERE gh.matk = ?
        GROUP BY sp.masp ORDER BY gh.magh DESC";

        return $this->pdoQuery($sql, $matk);
    }

    function getTotalPriceProducts($matk)
    {
        $sql = "SELECT
        giohang.matk,
        SUM(sanpham.gia_tien * chitietgiohang.so_luong) AS tong_tien
    FROM
        giohang
    JOIN
        chitietgiohang ON giohang.magh = chitietgiohang.magh
    JOIN
        sanpham ON chitietgiohang.masp = sanpham.masp
    WHERE
        giohang.matk = ?
    GROUP BY
        giohang.matk";
        return $this->pdoQueryOne($sql, $matk);
    }

    function getUserIdbyEmail($email)
    {
        $sql = "SELECT matk FROM taikhoan WHERE email like ?";

        return $this->pdoQueryValue($sql, '%' . $email . '%');
    }

    function getTotalQuantityProductByCartUser($matk)
    {
        $sql = "SELECT count(*) FROM giohang WHERE matk = ?";
        return $this->pdoQueryValue($sql, $matk);
    }

    function removeProductInTableCart($magh, $matk)
    {
        $sql = "DELETE FROM giohang WHERE magh =? AND matk = ?";
        $this->pdoExecute($sql, $magh, $matk);
    }

    function totalPromoPrice($masp)
    {
        $sql = "SELECT SUM(khuyenmai.giam_gia) as tongKM
        FROM khuyenmai 
        JOIN chitietkhuyenmai ON khuyenmai.makm = chitietkhuyenmai.makm
        WHERE chitietkhuyenmai.masp = ? AND khuyenmai.ngay_bat_dau <= CURRENT_TIMESTAMP 
        AND khuyenmai.ngay_ket_thuc >= CURRENT_TIMESTAMP";

        return $this->pdoQueryValue($sql, $masp);
    }
}
