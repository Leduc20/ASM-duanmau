<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min(products.price) as minprice,max(products.price) as mã from bill where 1";
    $sql.=" order by id desc";
    
}