<?php

function insert_comment($content,$id_user,$id_hh,$date)
{
    $sql = "INSERT INTO `comment`(`content`, `id_user`, `id_hh`, `date_comment`) VALUES ('$content','$id_user','$id_hh','id')";
    pdo_execute($sql);
}


?>