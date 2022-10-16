<?php



function loadall_thongke(){
    $sql="SELECT ` commodities`.`id_commodities` as iddm, ` commodities`.`name` as idten, count(`products`.`id_hh`), min(`products`.`price`) as minprice, max(products.price) as maxprice,avg(products.price) as avgprice" ;
    $sql.=" from products left join ` commodities` on ` commodities`.id_commodities =products.id_dm";
    $sql.=" group by commodities.id_commodties order by id_commodities desc";
    $listtk=pdo_query($sql);
    return $listtk;
}