<?php

function insert_comment($tenloai)
{
    $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}


?>