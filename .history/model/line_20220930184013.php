<?php
function insert_line($tenloai)
{
    $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_line($tenloai)
{
    $sql = "DELETE FROM ` commodities` WHERE id_commodities=" . $_GET['id_commodities'];
                pdo_execute($sql);
}
