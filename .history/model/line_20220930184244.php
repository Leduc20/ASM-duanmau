<?php
function insert_line($tenloai)
{
    $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_line($id)
{
    $sql = "DELETE FROM ` commodities` WHERE id_commodities=$id";
    pdo_execute($sql);
}
function list(){
    $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
            $listline = pdo_query($sql);
return$listline
}
