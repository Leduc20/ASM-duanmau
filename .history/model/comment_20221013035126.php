<?php

function insert_comment()
{
    $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}


?>