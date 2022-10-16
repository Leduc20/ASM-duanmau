<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min(products.price) as minprice,max(prodsucts.price) from bill where";
    $sql.=" order by id desc";
    
}