<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";


class PromoPage extends PDOModel
{
    function getInfoTablePromo($page_size, $pageNumber)
    {
        $startRow = ($pageNumber - 1) * $page_size;
        $sql = "SELECT * FROM khuyenmai";

        $sql .= " LIMIT $startRow, $page_size";

        return $this->pdoQuery($sql);
    }

    function countColumnPromo()
    {
        $sql = "SELECT COUNT(*) FROM khuyenmai";
        return $this->pdoQueryValue($sql);
    }
}
