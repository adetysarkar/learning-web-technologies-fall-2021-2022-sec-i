<?php

require_once('../model/productsModel.php');

$name = $_REQUEST['name'];
$buyingPrice = $_REQUEST['buyingPrice'];
$sellingPrice = $_REQUEST['sellingPrice'];
$ID = $_REQUEST['ID'];

$products = ['ID' => $ID, 'name' => $name, 'buyingPrice' => $buyingPrice, 'sellingPrice' => $sellingPrice];
$status = editProduct($products);

if ($status) {
    header('location: ../views/productList.php');
} else {
    header('location: ../views/edit.php?ID={$ID}');
}
