<?php

require_once('db.php');

function addProduct($product)
{
    $con = getConnection();
    $sql = "insert into products values('', '{$product['product_name']}', '{$product['product_buying_price']}', '{$product['product_selling_price']}')";

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

function editProduct($product)
{
    $con = getConnection();
    $sql = "update products set product_name='{$product['product_name']}', product_buying_price='{$product['product_buying_price']}', product_selling_price='{$product['product_selling_price']}' where id={$product['ID']}";

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
