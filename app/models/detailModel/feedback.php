<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class DetailFeedback extends PDOModel
{
    function InfoUsers($email)
    {
        $sql = "SELECT * FROM taikhoan WHERE email = ?";
        return $this->pdoQueryOne($sql, $email);
    }


    function InsertFeedback($userId, $productId, $textfb)
    {
        $sql = "INSERT INTO binhluan (matk, masp, noi_dung, trang_thai) VALUES (?, ?, ?, ?)";
        $this->pdoExecute($sql, $userId, $productId, $textfb, 1);
    }

    function ExportFeedback($productId, $arrangeType)
    {
        $sql = "SELECT binhluan.*, taikhoan.*
            FROM binhluan
            LEFT JOIN taikhoan ON binhluan.matk = taikhoan.matk
            WHERE binhluan.masp = ? AND binhluan.trang_thai = 1";

        if (!empty($arrangeType)) {
            if ($arrangeType == 'cmtNew') {
                $sql .= " ORDER BY ngay_bl DESC ";
            } else if ($arrangeType == 'cmtold') {
                $sql .= " ORDER BY ngay_bl ASC ";
            }
        } else {
            $sql .= " ORDER BY ngay_bl DESC ";
        }
        return $this->pdoQuery($sql, $productId);
    }

    function CountFeedback($productId)
    {
        $sql = "SELECT COUNT(*) FROM binhluan WHERE masp = ?";

        return $this->pdoQueryValue($sql, $productId);
    }


    // kiểm tra người dùng đã mua sản phẩm chưa để được đánh giá
    function checkPurchaseProducts($matk, $masp)
    {
        $sql = "SELECT donhang.*, chitietdonhang.*
        FROM donhang
        INNER JOIN chitietdonhang ON chitietdonhang.madh = donhang.madh
        WHERE donhang.matk = ? AND chitietdonhang.masp = ?";

        return $this->pdoQuery($sql, $matk, $masp);
    }

    function getCurUser($user_id) { 
        $sql = "SELECT * FROM `taikhoan` WHERE matk = ?";
        
        return $this->pdoQueryOne($sql, $user_id);
    }
}
