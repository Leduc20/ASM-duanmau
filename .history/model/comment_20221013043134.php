<?php

function insert_comment($content,$id_user,$id_hh,$date)
{
    $sql = "INSERT INTO `comment`(`content`, `id_user`, `id_hh`, `date_comment`) VALUES ('$content','$id_user','$id_hh','$date')";
    pdo_execute($sql);
}

function loadall_cmt($idpro)
{
    $sql = "SELECT * FROM `comment` where idpro order by id_comment desc";
    $list_cmt = pdo_query($sql);
    return $list_cmt;
}
?>