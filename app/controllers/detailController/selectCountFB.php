<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/detailModel/feedback.php";
$detailFeedback = new DetailFeedback();

$productId = isset($_POST['productId']) ? $_POST['productId'] : '';
$countFeedback = $detailFeedback->CountFeedback($productId);


if($countFeedback > 0){
    echo $countFeedback . ' Bình luận';
}else{
    echo '0 Bình luận';
}