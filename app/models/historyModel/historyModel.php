<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/" . "configs/pdoModel.php";
    
    class History extends PDOModel {
        function getAllOrders($user_id) { 
            $sql = "SELECT ngay_dat_hang, trang_thai, madh 
            FROM donhang WHERE matk = ? ORDER BY ngay_dat_hang DESC";

            return $this->pdoQuery($sql, $user_id);
        }

        function getPendingOrders($user_id) { 
            $sql = "SELECT ngay_dat_hang, trang_thai, madh 
            FROM donhang WHERE matk = ? AND trang_thai = 0 ORDER BY ngay_dat_hang DESC";

            return $this->pdoQuery($sql, $user_id);
        }

        function getCompleteOrders($user_id) { 
            $sql = "SELECT ngay_dat_hang, trang_thai, madh 
            FROM donhang WHERE matk = ? AND trang_thai = 1 ORDER BY ngay_dat_hang DESC";

            return $this->pdoQuery($sql, $user_id);
        }

        function getDetailsOrder($user_id, $order_id) { 
            $sql = "SELECT ctdh.so_luong, sp.ten_sp, sp.gia_tien, sp.gia_goc, ha.hinh_anh, lh.ten_loai 
                    FROM `chitietdonhang` ctdh JOIN donhang dh ON ctdh.madh = dh.madh 
                    JOIN sanpham sp ON ctdh.masp = sp.masp JOIN loaihang lh ON lh.maloai = sp.maloai 
                    JOIN hinhanh ha ON sp.masp = ha.masp WHERE dh.matk = ? AND ctdh.madh = ?
                    GROUP BY sp.masp";

            return $this->pdoQuery($sql, $user_id, $order_id);
        }

        function getCurrentUser($user_id) {
            $sql = "SELECT * FROM taikhoan WHERE matk = ?";

            return $this->pdoQuery($sql, $user_id);
        }
    }
?>