<?php

function loadall_comment($id_pro)
{
    $sql = "SELECT * FROM `comment` where 1";
    if($id_pro>0){
        $sql.=" AND id_comment='".$id_pro."'";
        $sql.=" order by id_comment desc";
    }
    " order by id_comment desc";

    $listcomment = pdo_query($sql);
    return $listcomment;
}


?>