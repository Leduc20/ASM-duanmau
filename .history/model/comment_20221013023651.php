<?php

function loadall_comment()
{
    $sql = "SELECT * FROM `` order by id_user desc";
    $listcomment = pdo_query($sql);
    return $listcomment;
}


?>