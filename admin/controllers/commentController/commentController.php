<?php
$ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
require_once $ROOT_ADMIN . "models/feedbackModel/feedbackModel.php";
$feedbackPage = new feedbackPage();
$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
$page_size = 10;
$startRow = ($pageNumber - 1) * $page_size;
$countColumnFB = $feedbackPage->countColumnFB();
$totalPages = ceil($countColumnFB / $page_size);
$infoTableFB = $feedbackPage->getInfoTableFB($page_size, $pageNumber);
require_once $ROOT_ADMIN . "views/comment/comment.php";
