<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class AddPromoPage extends PDOModel
{
    function insertPromo($namepromo, $pricepromo, $startdateFormat, $enddateFormat)
    {
        $sql = "INSERT INTO khuyenmai
        (ten_km, giam_gia, ngay_bat_dau, ngay_ket_thuc)
        VALUES (?, ?, ?, ?)";

        $this->pdoExecute($sql, $namepromo, $pricepromo, $startdateFormat, $enddateFormat);
    }
}
