<?php


require_once('../model/productsModel.php');

if (deleteProduct($_GET['id'])) {
    header('location: productList.php');
}
