<?php
include "global.php";
function tongdonhang()
{
    $sumall = 0;
    foreach ($_SESSION['mycart'] as $show) {
        $sum = $show[3] * $show[4];
        $sumall += $sum;
        
    }
    return $sumall;
}
function viewcart($del)
{
    global $img_path;
    $sumall = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $show) {
        // Mặc du báo lỗi không hiểu biến $img_path nhưng vẫn cho ra kết quả đúng là đường dẫn ảnh
        $img = $img_path . $show[2];
        $sum = $show[3] * $show[4];
        $sumall += $sum;
        if ($del == 1) {
            $delete_th = '<th>Thao tác</th>';
            $delete_td = '<td><a href="index.php?act=del_cart&idcart=' . $i . '"><input type="button" class="btn btn-danger text-black" value="Remove"></a></td>';
        } else {
            $delete_th = '';
            $delete_td = '';
        }
        // $delete_sp = '<a href="index.php?act=del_cart&idcart=' . $i . '"><input type="button" class="btn btn-danger text-black" value="Remove"></a>';
        echo '
        <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th class="text-center">Giá</th>
        <th class="text-center">Tổng tiền</th>
        <!-- <th class="text-center">Tổng Hóa Đơn</th> -->
        ' . $delete_th . '
    </tr>
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
        
        ' . $delete_td . '
        
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
        ';
}
function bill_ct($listbill)
{
    global $img_path;
    $sumall = 0;
    $i = 0;
    foreach ($listbill as $show) {
        // Mặc du báo lỗi không hiểu biến $img_path nhưng vẫn cho ra kết quả đúng là đường dẫn ảnh
        $img = $img_path . $show['image'];
        $sumall+= $show['thanhtien'];
        
        echo '
        <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th class="text-center">Giá</th>
        <th class="text-center">Tổng tiền</th>
        <!-- <th class="text-center">Tổng Hóa Đơn</th> -->
    </tr>
        <tr>
        <td class="col-sm-8 col-md-6">
        <div class="media">
            <a class="thumbnail pull-left" href="#"> <img class="media-object w-[180px]" src="' . $show['img']. '" "> </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="#">' . $show['name'] . '</a></h4>
                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                <!-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
            </div>
        </div></td>
        <td class="col-sm-1 col-md-1" style="text-align: center">
        <input type="email" class="form-control" id="exampleInputEmail1" value="' . $show['soluong'] . '">
        </td>
        <td class="col-sm-1 col-md-1 text-center w-[60px]"><strong>' . $show['price'] . ' VNĐ</strong></td>
        <td class="col-sm-1 col-md-1 text-center w-[60px]"><strong>' . $sumall . ' VNĐ</strong></td>
        
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
        <td class="text-right"><h5><strong>' . $show['thanhtien'] . '</strong></h5></td>
    </tr>   
        ';
}
function insert_bill($name,$email,$address,$phone,$pttt,$date_buy,$tongdonhang){
    $sql="insert into `bill`(`bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `date_buy`, `sum`, `bill_status`, `receive_name`, `receive_address`, `receive_phone`) value('$name','$email','$address','$phone','$pttt','$date_buy','$tongdonhang')";
    pdo_execute($sql);
    return pdo_execute_lastInsertId($sql);
}
function insert_cart($id_user,$id_hh,$price,$soluong,$thanhtien,$id_bill){
    $sql="insert into `cart`(`id_user`, `id_hh`, `price`, `soluong`, `thanhtien`, `id_bill`) value('$id_user','$id_hh','$price','$soluong','$thanhtien','$id_bill')";
    pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM `bill` WHERE id_bill =".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadone_cart($idbill)
{
    $sql = "SELECT * FROM `cart` WHERE id_bill =".$idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}
function view_infor()
{
    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
        $name = $_SESSION['user']['name'];
        $addres = $_SESSION['user']['addres'];
        $email = $_SESSION['user']['email'];
        $phone = $_SESSION['user']['phone'];
    } else {
        $name = "";
        $addres = "";
        $email = "";
        $phone = "";
    }

    echo '
    <form action="" method="post">
            <p class="font-bold mt-3 mb-2">Người đặt</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="" value="'.$name.'">
            <p class="font-bold mt-3 mb-2">Địa chỉ</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="addres" id="" value="'.$addres.'">
            <p class="font-bold mt-3 mb-2">Email</p>
            <input class="border w-full p-2 rounded-[4px]" type="email" name="email" id="" value="'.$email.'">
            <p class="font-bold mt-3 mb-2">Số điện thoại</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="phone" id="" value="'.$phone.'">
     </form>
    ';
}

function loadall_thongke()
{
    $sql = "select commodities.id_commodities as iddm, commodities.name as tendm, count(products.id_hh) as countpro, min(products.sale) as minprice,max(products.price) as maxprice,avg(products.price) as avgprice";
    $sql .= " from products left join  commodities on  commodities.id_commodities =products.id_dm";
    $sql .= " group by  commodities.id_commodities order by  commodities.id_commodities desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
