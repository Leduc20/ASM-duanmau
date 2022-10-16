<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id),";
    $sql.=" order by id desc";
    
}