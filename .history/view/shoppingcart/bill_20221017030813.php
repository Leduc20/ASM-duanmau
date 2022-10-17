<section class="max-w ">
    <div class="max-w-[800px] m-auto mt-5 border rounded p-6 bg-white">
        <p class="bg-red-200 rounded-[5px] p-2 text-[35px] text-red-700">
            Thông tin người đặt hàng
        </p>
        <?php
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
        ?>
        <form action="" method="post">
            <p class="font-bold mt-3 mb-2">Người đặt</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="" value="<?= $name ?>">
            <p class="font-bold mt-3 mb-2">Địa chỉ</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="addres" id="" value="<?= $address ?>">
            <p class="font-bold mt-3 mb-2">Email</p>
            <input class="border w-full p-2 rounded-[4px]" type="email" name="email" id="" value="<?= $email ?>">
            <p class="font-bold mt-3 mb-2">Số điện thoại</p>
            <input class="border w-full p-2 rounded-[4px]" type="number" name="phone" id="" value="<?= $phone ?>">
        </form>

        <div>

        </div>
    </div>
    <div>

    </div>

    <div class="grid grid-cols-3 gap-6 max-w-[1200px] m-auto mt-5 mb-5 border rounded p-6 bg-white">

        <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
        </div>
        <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
        </div>
        <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
        </div>

    </div>

</section>
<div class="container mt-[50px] border rounded p-6 bg-white">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1 w-[1200px] mx-auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Tổng tiền</th>
                        <!-- <th class="text-center">Tổng Hóa Đơn</th> -->
                        <th> EDIT</th>
                    </tr>
                </thead>
                <tbody>
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

                    <!-- <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                              
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                        <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger text-black">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr> -->
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <a href="index.php?act=bill">
                                <input type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Đặt hàng">
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white">
                                Checkout <span class="glyphicon glyphicon-play"></span>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>