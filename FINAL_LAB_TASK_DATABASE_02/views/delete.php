<?php


require_once('../model/productsModel.php');

if (deleteProduct($_GET['ID'])) {
    header('location: productList.php');
}
