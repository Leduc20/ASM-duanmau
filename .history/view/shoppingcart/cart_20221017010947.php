
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1 w-[1200px] mx-auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Tổng tiền</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      foreach ($_SESSION['mycart'] as $show) {
                        $img=$img_path.$show[2];
                        $sum=$show[3]*$show[4];
                        $delete_sp="";
                        echo '
                        <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object w-[180px]" src="'.$img.'" "> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">'.$show[1].'</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <!-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="'.$show[4].'">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center w-[60px]"><strong>'.$show[3].' VNĐ</strong></td>
                        <td class="col-sm-1 col-md-1 text-center w-[60px]"><strong>'.$sum.' VNĐ</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="#" type="button" name="delete" class="btn btn-danger text-black">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </a></td>
                    </tr>
                        ';
                      }
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
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
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
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>