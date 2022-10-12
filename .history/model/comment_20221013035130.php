<?php

function insert_comment()
{
    $sql = "INSERT INTO `coment`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}


?>