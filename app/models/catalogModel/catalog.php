<?php

use Google\Service\FirebaseRules\Issue;

require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";
$brandId = isset($_GET['maloai']) ? $_GET['maloai'] : '';
$newProducts = isset($_GET['type']) ? $_GET['type'] : '';
$priceRange = isset($_GET['priceRange']) ? $_GET['priceRange'] : '';
$rateRange = isset($_GET['rateRange']) ? $_GET['rateRange'] : '';
$filterOption = isset($_GET['filterOption']) ? $_GET['filterOption'] : '';
$pageNumber = isset($_GET['pageNumber']) ? $_GET['pageNumber'] : 1;
class CatalogProducts extends PDOModel
{
    function getProductsByCategory($brandId, $newProduct, $pageNumber, $page_size = 12, $priceRange, $rateRange, $filterOption)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT sanpham.*, loaihang.ten_loai, hinhanh.hinh_anh
        FROM sanpham
        INNER JOIN loaihang ON sanpham.maloai = loaihang.maloai
        LEFT JOIN (
            SELECT masp, GROUP_CONCAT(hinh_anh) AS hinh_anh
            FROM hinhanh
            GROUP BY masp
        ) AS hinhanh ON sanpham.masp = hinhanh.masp
        WHERE sanpham.an_hien = 1";
        if (!empty($brandId)) {
            $sql .= " AND sanpham.maloai = ?";
            if (!empty($priceRange)) {
                if ($priceRange == 'under500k') {
                    $sql .= " AND sanpham.gia_tien < 500000 ";
                } else if ($priceRange == '500kto1m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 500000 AND 1000000 ";
                } else if ($priceRange == '1mto1.5m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1000000 AND 1500000 ";
                } else if ($priceRange == '1.5mto2m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1500000 AND 2000000 ";
                } else {
                    $sql .= " AND sanpham.gia_tien > 2000000 ";
                }
            }

            if (!empty($rateRange)) {
                if ($rateRange == 'under20') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) < 20 ";
                } else if ($rateRange == '20to30') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 20 AND 30 ";
                } else if ($rateRange == '30to40') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 30 AND 40 ";
                } else if ($rateRange == '40to50') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 40 AND 50 ";
                } else {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) > 50 ";
                }
            }

            if (!empty($filterOption)) {
                if ($filterOption == 'priceDesc') {
                    $sql .= " ORDER BY sanpham.gia_tien DESC ";
                } else if ($filterOption == 'priceASC') {
                    $sql .= " ORDER BY sanpham.gia_tien ASC ";
                } else if ($filterOption == 'topViews') {
                    $sql .= " ORDER BY sanpham.so_luot_xem DESC ";
                }
            }

            $sql .= " LIMIT $startRow, $page_size";
            return $this->pdoQuery($sql, $brandId);
        }

        if (!empty($newProduct)) {
            $currentDate = date('Y-m-d');  // Ngày hiện tại
            $oneMonthAgo = date('Y-m-d', strtotime('-1 month', strtotime($currentDate)));  // Ngày hiện tại - 1 tháng
            $sql .= " AND sanpham.ngay_nhap >= '$oneMonthAgo'";
            if (!empty($priceRange)) {
                if ($priceRange == 'under500k') {
                    $sql .= " AND sanpham.gia_tien < 500000 ";
                } else if ($priceRange == '500kto1m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 500000 AND 1000000 ";
                } else if ($priceRange == '1mto1.5m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1000000 AND 1500000 ";
                } else if ($priceRange == '1.5mto2m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1500000 AND 2000000 ";
                } else {
                    $sql .= " AND sanpham.gia_tien > 2000000 ";
                }
            }
            if (!empty($rateRange)) {
                if ($rateRange == 'under20') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) < 20 ";
                } else if ($rateRange == '20to30') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 20 AND 30 ";
                } else if ($rateRange == '30to40') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 30 AND 40 ";
                } else if ($rateRange == '40to50') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 40 AND 50 ";
                } else {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) > 50 ";
                }
            }

            if (!empty($filterOption)) {
                if ($filterOption == 'priceDesc') {
                    $sql .= " ORDER BY sanpham.gia_tien DESC ";
                } else if ($filterOption == 'priceASC') {
                    $sql .= " ORDER BY sanpham.gia_tien ASC ";
                } else if ($filterOption == 'topViews') {
                    $sql .= " ORDER BY sanpham.so_luot_xem DESC ";
                }
            }

            $sql .= " LIMIT $startRow, $page_size";
            // var_dump($sql);
            // if(!empty($priceRange)){
            //     echo $priceRange;
            // }else{
            //     echo 'không tồn tại';
            // }
            // if(!empty($filterOption)){
            //     echo $filterOption;
            // }else{
            //     echo 'không tồn tại';
            // }
            return $this->pdoQuery($sql);
        }
    }

    function getTotalProducts($brandId, $newProducts, $priceRange, $rateRange, $filterOption)
    {
        if (!empty($brandId)) {
            $sql = "SELECT COUNT(*) FROM sanpham WHERE sanpham.an_hien = 1 AND sanpham.maloai = ?";
            if (!empty($priceRange) && !empty($rateRange)) {
                if ($priceRange == 'under500k') {
                    $sql .= " AND sanpham.gia_tien < 500000 ";
                } else if ($priceRange == '500kto1m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 500000 AND 1000000 ";
                } else if ($priceRange == '1mto1.5m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1000000 AND 1500000 ";
                } else if ($priceRange == '1.5mto2m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1500000 AND 2000000 ";
                } else {
                    $sql .= " AND sanpham.gia_tien > 2000000 ";
                }
                if ($rateRange == 'under20') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) < 20 ";
                } else if ($rateRange == '20to30') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 20 AND 30 ";
                } else if ($rateRange == '30to40') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 30 AND 40 ";
                } else if ($rateRange == '40to50') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 40 AND 50 ";
                } else {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) > 50 ";
                }
            } else if (!empty($rateRange) && !!empty($priceRange)) {
                if (!empty($rateRange)) {
                    if ($rateRange == 'under20') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) < 20 ";
                    } else if ($rateRange == '20to30') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 20 AND 30 ";
                    } else if ($rateRange == '30to40') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 30 AND 40 ";
                    } else if ($rateRange == '40to50') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 40 AND 50 ";
                    } else {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) > 50 ";
                    }
                }
            } else if (!empty($priceRange) && !!empty($rateRange)) {
                if (!empty($priceRange)) {
                    if ($priceRange == 'under500k') {
                        $sql .= " AND sanpham.gia_tien < 500000 ";
                    } else if ($priceRange == '500kto1m') {
                        $sql .= " AND sanpham.gia_tien BETWEEN 500000 AND 1000000 ";
                    } else if ($priceRange == '1mto1.5m') {
                        $sql .= " AND sanpham.gia_tien BETWEEN 1000000 AND 1500000 ";
                    } else if ($priceRange == '1.5mto2m') {
                        $sql .= " AND sanpham.gia_tien BETWEEN 1500000 AND 2000000 ";
                    } else {
                        $sql .= " AND sanpham.gia_tien > 2000000 ";
                    }
                }
            }

            if (!empty($filterOption)) {
                if ($filterOption == 'priceDesc') {
                    $sql .= " ORDER BY sanpham.gia_tien DESC ";
                } else if ($filterOption == 'priceASC') {
                    $sql .= " ORDER BY sanpham.gia_tien ASC ";
                } else if ($filterOption == 'topViews') {
                    $sql .= " ORDER BY sanpham.so_luot_xem DESC ";
                }
            }

            return $this->pdoQueryValue($sql, $brandId);
        } elseif (!empty($newProducts)) {
            $currentDate = date('Y-m-d');  // Ngày hiện tại
            $oneMonthAgo = date('Y-m-d', strtotime('-1 month', strtotime($currentDate)));  // Ngày hiện tại - 1 tháng
            $sql = "SELECT COUNT(*) FROM sanpham WHERE sanpham.an_hien = 1 AND sanpham.ngay_nhap >= '$oneMonthAgo'";
            if (!empty($priceRange) && !empty($rateRange)) {
                if ($priceRange == 'under500k') {
                    $sql .= " AND sanpham.gia_tien < 500000 ";
                } else if ($priceRange == '500kto1m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 500000 AND 1000000 ";
                } else if ($priceRange == '1mto1.5m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1000000 AND 1500000 ";
                } else if ($priceRange == '1.5mto2m') {
                    $sql .= " AND sanpham.gia_tien BETWEEN 1500000 AND 2000000 ";
                } else {
                    $sql .= " AND sanpham.gia_tien > 2000000 ";
                }
                if ($rateRange == 'under20') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) < 20 ";
                } else if ($rateRange == '20to30') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 20 AND 30 ";
                } else if ($rateRange == '30to40') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 30 AND 40 ";
                } else if ($rateRange == '40to50') {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 40 AND 50 ";
                } else {
                    $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) > 50 ";
                }
            } else if (!empty($rateRange) && !!empty($priceRange)) {
                if (!empty($rateRange)) {
                    if ($rateRange == 'under20') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) < 20 ";
                    } else if ($rateRange == '20to30') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 20 AND 30 ";
                    } else if ($rateRange == '30to40') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 30 AND 40 ";
                    } else if ($rateRange == '40to50') {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) BETWEEN 40 AND 50 ";
                    } else {
                        $sql .= " AND (((sanpham.gia_goc - sanpham.gia_tien) / sanpham.gia_goc) * 100) > 50 ";
                    }
                }
            } else if (!empty($priceRange) && !!empty($rateRange)) {
                if (!empty($priceRange)) {
                    if ($priceRange == 'under500k') {
                        $sql .= " AND sanpham.gia_tien < 500000 ";
                    } else if ($priceRange == '500kto1m') {
                        $sql .= " AND sanpham.gia_tien BETWEEN 500000 AND 1000000 ";
                    } else if ($priceRange == '1mto1.5m') {
                        $sql .= " AND sanpham.gia_tien BETWEEN 1000000 AND 1500000 ";
                    } else if ($priceRange == '1.5mto2m') {
                        $sql .= " AND sanpham.gia_tien BETWEEN 1500000 AND 2000000 ";
                    } else {
                        $sql .= " AND sanpham.gia_tien > 2000000 ";
                    }
                }
            }

            if (!empty($filterOption)) {
                if ($filterOption == 'priceDesc') {
                    $sql .= " ORDER BY sanpham.gia_tien DESC ";
                } else if ($filterOption == 'priceASC') {
                    $sql .= " ORDER BY sanpham.gia_tien ASC ";
                } else if ($filterOption == 'topViews') {
                    $sql .= " ORDER BY sanpham.so_luot_xem DESC ";
                }
            }

            return $this->pdoQueryValue($sql);
        }
    }

    function getTypeCatagory()
    {
        $sql = "SELECT * FROM loaihang";

        return $this->pdoQuery($sql);
    }
}
