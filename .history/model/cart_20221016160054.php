<?php



function loadall_thongke(){
    $sql="select commodities.name as tendm, count(products.id), min(products.price) as minprice,max(products.price) as maxprice,avg(products.price)" ;
    $sql.=" .from products left join commodities on commodities.id_commodities=products.id_dm";
    $sql.=" group by co order by id_commodities desc";
    $listtk=pdo_query($sql);
    return $listtk;
}