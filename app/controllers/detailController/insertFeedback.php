<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/detailModel/feedback.php";
$detailFeedback = new DetailFeedback();

$textfb = isset($_POST['textfb']) ? $_POST['textfb'] : '';
$productId = isset($_POST['productId']) ? $_POST['productId'] : '';
$userId = isset($_POST['userId']) ? $_POST['userId'] : '';
$detailFeedback->InsertFeedback($userId, $productId, $textfb);
