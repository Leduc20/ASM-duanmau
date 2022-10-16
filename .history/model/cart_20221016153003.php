<?php



function loadall_thongke(){
    $sql="select commodities,name, count(product)";
    $sql.=" order by id desc";
    
}