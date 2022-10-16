<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min(products.price),max from bill ư";
    $sql.=" order by id desc";
    
}