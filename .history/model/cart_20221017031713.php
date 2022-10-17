<?php
function viewcart


function loadall_thongke(){
    $sql="select commodities.id_commodities as iddm, commodities.name as tendm, count(products.id_hh) as countpro, min(products.sale) as minprice,max(products.price) as maxprice,avg(products.price) as avgprice" ;
    $sql.=" from products left join  commodities on  commodities.id_commodities =products.id_dm";
    $sql.=" group by  commodities.id_commodities order by  commodities.id_commodities desc";
    $listtk=pdo_query($sql);
    return $listtk;
}