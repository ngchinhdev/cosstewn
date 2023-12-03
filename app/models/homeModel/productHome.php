<?php
    require_once "../../configs/pdoModel.php";
    
    class ProductHome extends PDOModel {
        function getFlashSaleProducts() {
            $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh, km.ten_km, km.giam_gia
                    FROM sanpham
                    INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
                    LEFT JOIN (
                        SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
                        FROM hinhanh
                        GROUP BY masp
                    ) AS hinhanh ON sanpham.masp = hinhanh.masp
                    LEFT JOIN chitietkhuyenmai ctkm ON ctkm.masp = sanpham.masp
                    LEFT JOIN khuyenmai km ON km.makm = ctkm.makm
                    WHERE sanpham.an_hien = 1
                    GROUP BY sanpham.masp 
                    ORDER BY ((gia_goc - gia_tien) / gia_goc) DESC LIMIT 5";
            
            return $this->pdoQuery($sql);
        }
        
        function getNewProducts() {
            $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh, km.ten_km, km.giam_gia
                    FROM sanpham
                    INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
                    LEFT JOIN (
                        SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
                        FROM hinhanh
                        GROUP BY masp
                    ) AS hinhanh ON sanpham.masp = hinhanh.masp
                    LEFT JOIN chitietkhuyenmai ctkm ON ctkm.masp = sanpham.masp
                    LEFT JOIN khuyenmai km ON km.makm = ctkm.makm
                    WHERE sanpham.an_hien = 1
                    GROUP BY sanpham.masp
                    ORDER BY ngay_nhap DESC LIMIT 5";

            return $this->pdoQuery($sql);
        }

        function getBestWatchedProducts() {
            $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh, km.ten_km, km.giam_gia
                    FROM sanpham
                    INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
                    LEFT JOIN (
                        SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
                        FROM hinhanh
                        GROUP BY masp
                    ) AS hinhanh ON sanpham.masp = hinhanh.masp
                    LEFT JOIN chitietkhuyenmai ctkm ON ctkm.masp = sanpham.masp
                    LEFT JOIN khuyenmai km ON km.makm = ctkm.makm
                    WHERE sanpham.an_hien = 1
                    GROUP BY sanpham.masp
                    ORDER BY sanpham.so_luot_xem DESC LIMIT 5";

            return $this->pdoQuery($sql);
        }

        function getForYouProducts() {
            $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh, km.ten_km, km.giam_gia
                    FROM sanpham
                    INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
                    LEFT JOIN (
                        SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
                        FROM hinhanh
                        GROUP BY masp
                    ) AS hinhanh ON sanpham.masp = hinhanh.masp
                    LEFT JOIN chitietkhuyenmai ctkm ON ctkm.masp = sanpham.masp
                    LEFT JOIN khuyenmai km ON km.makm = ctkm.makm
                    WHERE sanpham.an_hien = 1
                    GROUP BY sanpham.masp
                    ORDER BY ngay_nhap ASC LIMIT 5";

            return $this->pdoQuery($sql);
        }

        function getHighlightCategory() {
            $sql = "SELECT * FROM loaihang WHERE noi_bat = 1 AND an_hien = 1";

            return $this->pdoQuery($sql);
        }

        function getBannersSlider() {
            $sql = "SELECT * FROM banner WHERE loai = 0";

            return $this->pdoQuery($sql);
        }

        function getBannersBrand() {
            $sql = "SELECT * FROM banner WHERE loai = 1";

            return $this->pdoQuery($sql);
        }

        function getBannersPartner() {
            $sql = "SELECT * FROM banner WHERE loai = 2";

            return $this->pdoQuery($sql);
        }

        function getLastBannerHome() {
            $sql = "SELECT * FROM banner WHERE loai = 3";

            return $this->pdoQueryOne($sql);
        }

        function getBannersDetail() {
            $sql = "SELECT * FROM banner WHERE loai = 5";
    
            return $this->pdoQuery($sql);
        }
    }
?>