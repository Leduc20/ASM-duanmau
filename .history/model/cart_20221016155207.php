<?php



function loadall_thongke(){
    $sql="select commodities.name, count(products.id), min(products.price) as minprice,max(products.price) as maxprice,avg(products.price)" ;
    $sql.=" .from products left join commodities on commodities.id where 1";
    $sql.=" order by id desc";
    
}