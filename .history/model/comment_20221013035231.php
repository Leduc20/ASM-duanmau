<?php

function insert_comment($content,$)
{
    $sql = "INSERT INTO `comment`(`content`, `id_user`, `id_hh`, `date_comment`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]')";
    pdo_execute($sql);
}


?>