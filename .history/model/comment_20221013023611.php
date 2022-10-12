<?php

function loadall_comment()
{
    $sql = "SELECT * FROM `user` order by id_user desc";
    $listaccount = pdo_query($sql);
    return $listaccount;
}
?>