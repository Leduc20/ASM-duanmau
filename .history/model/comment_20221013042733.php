<?php

function insert_comment($content,$id_user,$id_hh,$date)
{
    $sql = "INSERT INTO `comment`(`content`, `id_user`, `id_hh`, `date_comment`) VALUES ('$content','$id_user','$id_hh','$date')";
    pdo_execute($sql);
}

function loadall_line()
{
    $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
    $listline = pdo_query($sql);
    return $listline;
}
?>