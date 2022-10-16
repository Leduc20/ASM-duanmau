<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min()";
    $sql.=" order by id desc";
    
}