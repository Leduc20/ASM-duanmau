<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min(products.price)";
    $sql.=" order by id desc";
    
}