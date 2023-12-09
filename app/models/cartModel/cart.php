<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";
class CartPage extends PDOModel
{
    function insertProductIntoCart($matk, $masp, $quantity)
    {
        $existingMagh = $this->getMaghByMatk($matk);
        $magh = $existingMagh ? $existingMagh['magh'] : 'loi';
        $existingProduct = $this->getProductInDetailCart($masp, $magh);
        $quantityMax = $this->getQuantityMaxByPrd($masp);
        $existingUser = $this->checkInfoUserInTable($matk);
        if ($existingProduct && $existingUser) {
            $quantityMaxProduct = $quantityMax['so_luong'];
            $newQuantity = $existingProduct['so_luong'] + $quantity;
            if ($newQuantity <= $quantityMaxProduct) {
                $this->updateProductInDetailCart($masp, $newQuantity, $magh);
            } else {
                $this->updateProductInDetailCart($masp, $quantityMaxProduct, $magh);
            }
        } else {
            if ($existingUser) {
                $this->insertProductIntoDetailCart($magh, $masp, $quantity);
            } else {
                $sql = "INSERT INTO giohang (matk) VALUES (?)";
                $lastInsertId = $this->pdoExecute($sql, $matk);
                if ($lastInsertId) {
                    $this->insertProductIntoDetailCart($lastInsertId, $masp, $quantity);
                }
            }
        }
    }

    // Lấy ra mã gh theo tài khoản nếu có tồn tại magh
    function getMaghByMatk($matk)
    {
        $sql = "SELECT magh FROM giohang WHERE matk = ?";

        return $this->pdoQueryOne($sql, $matk);
    }

    function insertProductIntoDetailCart($lastInsertId, $masp, $quantity)
    {
        $sql = "INSERT INTO chitietgiohang (magh, masp, so_luong) VALUES (?, ?, ?)";
        $this->pdoExecute($sql, $lastInsertId, $masp, $quantity);
    }

    function changeQuantityProductbyCart($quantity, $magh, $masp)
    {
        $sql = "UPDATE chitietgiohang SET so_luong = ? WHERE magh = ? AND masp = ?";
        $this->pdoExecute($sql, $quantity, $magh, $masp);
    }

    function getProductInDetailCart($masp, $magh)
    {
        $sql = "SELECT * FROM chitietgiohang WHERE masp = ? AND magh = ?";
        return $this->pdoQueryOne($sql, $masp, $magh);
    }

    function getQuantityMaxByPrd($masp)
    {
        $sql = "SELECT * FROM sanpham WHERE masp = ?";
        return $this->pdoQueryOne($sql, $masp);
    }

    function checkInfoUserInTable($matk)
    {
        $sql = "SELECT * FROM giohang WHERE matk = ?";
        return $this->pdoQueryOne($sql, $matk);
    }

    function updateProductInDetailCart($masp, $newQuantity, $magh)
    {
        $sql = "UPDATE chitietgiohang SET so_luong = ? WHERE masp = ? AND magh = ?";
        $this->pdoExecute($sql, $newQuantity, $masp, $magh);
    }

    function getProductsByUserId($matk)
    {
        $sql = "SELECT sp.*, ctgh.so_luong as so_luong_chitiet, gh.matk, lh.maloai, lh.ten_loai, GROUP_CONCAT(ha.hinh_anh) AS hinh_anh, gh.magh
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

    function getPromoProductByMasp($masp)
    {
        $sql = "SELECT km.giam_gia
        FROM khuyenmai km
        INNER JOIN chitietkhuyenmai ctkm ON km.makm = ctkm.makm
        WHERE ctkm.masp = ? AND km.ngay_bat_dau <= CURRENT_TIMESTAMP 
        AND km.ngay_ket_thuc >= CURRENT_TIMESTAMP";

        return $this->pdoQuery($sql, $masp);
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
        $sql = "SELECT count(*) FROM chitietgiohang
            JOIN giohang on chitietgiohang.magh = giohang.magh
            WHERE giohang.matk = ?";
        return $this->pdoQueryValue($sql, $matk);
    }

    function removeProductInTableCart($masp, $magh, $matk)
    {
        $sql = "DELETE chitietgiohang 
        FROM chitietgiohang
        JOIN giohang ON chitietgiohang.magh = giohang.magh
        WHERE chitietgiohang.masp = ? AND giohang.magh = ? AND giohang.matk = ?";
        $this->pdoExecute($sql, $masp, $magh, $matk);
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
