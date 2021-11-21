<?php

require_once('db.php');

function addProduct($products)
{
    $con = getConnection();
    $sql = "insert into products values('', '{$products['name']}', '{$products['buyingPrice']}', '{$products['sellingPrice']}')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllProducts()
{
    $con = getConnection();
    $sql = "select * from products";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getProductById($ID)
{
    $con = getConnection();
    $sql = "select * from products where ID={$ID}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editProduct($products)
{
    $con = getConnection();
    $sql = "update products set name='{$products['name']}', buyingPrice='{$products['buyingPrice']}', sellingPrice='{$products['sellingPrice']}' where ID={$products['ID']}";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteProduct($ID)
{
    $con = getConnection();
    $sql = "delete from products where ID={$ID}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
