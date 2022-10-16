<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min(products.price),max from";
    $sql.=" order by id desc";
    
}