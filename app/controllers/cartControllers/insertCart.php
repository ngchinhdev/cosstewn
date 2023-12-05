<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$magh = isset($_POST['magh']) ? $_POST['magh'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$masp = isset($_POST['masp']) ? $_POST['masp'] : '';
$changeQuantityProductbyCart = $cartPage->changeQuantityProductbyCart($quantity, $magh, $masp);