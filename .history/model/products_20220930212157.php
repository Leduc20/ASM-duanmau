<?php
function insert_products($name, $filename, $price, $detail, $sale,$idlh)
{
    $sql = "INSERT INTO ` products`(name, filename, price, detail, sale,idlh) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_products($id)
{
    $sql = "DELETE FROM ` products` WHERE id_hh=$id";
    pdo_execute($sql);
}
function loadall_products()
{
    $sql = "SELECT * FROM `products` order by id_hh desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function loadone_products($id)
{
    $sql = "SELECT * FROM ` products` WHERE id_hh =$id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_products($id,$tenloai)
{
    $sql = "UPDATE ` products` SET name='" . $tenloai . "' WHERE id_hh=" . $id;
    pdo_execute($sql);
}
