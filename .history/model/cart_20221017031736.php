<?php
function viewcart(){
    <?php
    $sumall = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $show) {
        $img = $img_path . $show[2];
        $sum = $show[3] * $show[4];
        $sumall += $sum;
        $delete_sp = '<a href="index.php?act=del_cart&idcart=' . $i . '"><input type="button" class="btn btn-danger text-black" value="Remove"></a>';
        echo '
        <tr>
        <td class="col-sm-8 col-md-6">
        <div class="media">
            <a class="thumbnail pull-left" href="#"> <img class="media-object w-[180px]" src="' . $img . '" "> </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="#">' . $show[1] . '</a></h4>
                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                <!-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
            </div>
        </div></td>
        <td class="col-sm-1 col-md-1" style="text-align: center">
        <input type="email" class="form-control" id="exampleInputEmail1" value="' . $show[4] . '">
        </td>
        <td class="col-sm-1 col-md-1 text-center w-[60px]"><strong>' . $show[3] . ' VNĐ</strong></td>
        <td class="col-sm-1 col-md-1 text-center w-[60px]"><strong>' . $sum . ' VNĐ</strong></td>
        <td class="col-sm-1 col-md-1">
        ' . $delete_sp . '
        </td>
        </tr>
    ';
        $i += 1;
    }
    echo '
         <tr>
        <td>   </td>
        <td>   </td>
        <td>   </td>
        <td><h5>Tổng tất cả</h5></td>
        <td class="text-right"><h5><strong>' . $sumall . '</strong></h5></td>
    </tr>
    <tr>
        <td>   </td>
        <td>   </td>
        <td>   </td>
        <td><h5>Estimated shipping</h5></td>
        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
    </tr>
    <tr>
        <td>   </td>
        <td>   </td>
        <td>   </td>
        <td><h3>Total</h3></td>
        <td class="text-right"><h3><strong>$31.53</strong></h3></td>
    </tr>
    
        ';
?>
}


function loadall_thongke(){
    $sql="select commodities.id_commodities as iddm, commodities.name as tendm, count(products.id_hh) as countpro, min(products.sale) as minprice,max(products.price) as maxprice,avg(products.price) as avgprice" ;
    $sql.=" from products left join  commodities on  commodities.id_commodities =products.id_dm";
    $sql.=" group by  commodities.id_commodities order by  commodities.id_commodities desc";
    $listtk=pdo_query($sql);
    return $listtk;
}