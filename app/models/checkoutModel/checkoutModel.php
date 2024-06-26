<?php
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";
    
    class Checkout extends PDOModel {
        function addNewOrder($user_id, $name, $phone, $email, $adr, $method) {
            $sql = "INSERT INTO donhang (matk, ho_ten, so_dien_thoai, email, dia_chi, phuong_thuc)
                    VALUES(?, ?, ?, ?, ?, ?)";
            return $this->pdoExecute($sql, $user_id, $name, $phone, $email, $adr, $method);
        }

        function addNewOrderDetails($order_id, $prod_id, $quantity, $price) {
            $sql = "INSERT INTO chitietdonhang (madh, masp, so_luong, gia_tien)
                    VALUES(?, ?, ?, ?)";

            return $this->pdoExecute($sql, $order_id, $prod_id, $quantity, $price);
        }

        function getProductToPay($prod_id) {
            $sql = "SELECT * FROM sanpham sp LEFT JOIN ( SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh 
                    FROM hinhanh GROUP BY masp ) ha ON sp.masp = ha.masp WHERE sp.masp = ?";

            return $this->pdoQueryOne($sql, $prod_id);
        }

        function getCurUser($user_id) {
            $sql = "SELECT * FROM taikhoan WHERE matk = ?";

            return $this->pdoQueryOne($sql, $user_id);
        }

        function decreaseQuantityProd($quantity, $prod_id) {
            $sql = "UPDATE sanpham SET so_luong = so_luong - ? WHERE masp = ?";

            return $this->pdoExecute($sql, $quantity, $prod_id);
        }

        function getCurCartId($user_id) {
            $sql = "SELECT magh FROM giohang WHERE matk = ?";

            return $this->pdoQueryValue($sql, $user_id);
        }

        function deleteCartAfterBuy($cart_id, $prod_id) {
            $sql = "DELETE FROM chitietgiohang WHERE magh = ? AND masp = ?";

            return $this->pdoExecute($sql, $cart_id, $prod_id);
        }
    }
?>