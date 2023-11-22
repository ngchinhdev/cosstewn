<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$magh = isset($_POST['magh']) ? $_POST['magh'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$changeQuantityProductbyCart = $cartPage->changeQuantityProductbyCart($quantity, $magh);