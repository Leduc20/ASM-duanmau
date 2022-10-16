<?php



function loadall_thongke(){
    $sql="select commodities,name, count(products)";
    $sql.=" order by id desc";
    
}