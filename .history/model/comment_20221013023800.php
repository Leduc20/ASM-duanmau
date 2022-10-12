<?php

function loadall_comment()
{
    $sql = "SELECT * FROM `comment` where 1";
    "" order by id_comment desc";

    $listcomment = pdo_query($sql);
    return $listcomment;
}


?>