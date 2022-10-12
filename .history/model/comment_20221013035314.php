<?php

function insert_comment($content,$id_user,$id_hh,$date)
{
    $sql = "INSERT INTO `comment`(`content`, `id_user`, `id_hh`, `date_comment`) VALUES ('$content','$id','[value-4]','[value-5]')";
    pdo_execute($sql);
}


?>