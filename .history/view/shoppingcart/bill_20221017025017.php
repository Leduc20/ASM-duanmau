<section class="max-w">
        <div class="max-w-[800px] m-auto mt-5">
            <p class="bg-red-200 rounded-[5px] p-2 text-[35px] text-red-700">
                Thông tin người đặt hàng
            </p>
            <?php 
            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                extract($_SESSION['user']);

            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <input type="hidden" name="id_user" id="" value="<?=$id_user?>">
                <p class="font-bold mt-3 mb-2">Người dạt</p>
                <input class="border w-full p-2 rounded-[4px]" type="email" name="email" id="" value="<?=$email?>">
                <p class="font-bold mt-3 mb-2">Tên đăng nhập</p>
                <input class="border w-full p-2 rounded-[4px]" type="text" name="user" id=""  value="<?=$name?>">
                <p class="font-bold mt-3 mb-2">Mật khẩu</p>
                <input class="border w-full p-2 rounded-[4px]" type="password" name="pass" id="" value="<?=$password?>">
                <p class="font-bold mt-3 mb-2">Địa chỉ</p>
                <input class="border w-full p-2 rounded-[4px]" type="text" name="address" id="" value="<?=$address?>">
                <p class="font-bold mt-3 mb-2">Số điện thoại</p>
                <input class="border w-full p-2 rounded-[4px]" type="text" name="phone" id="" value="<?=$phone?>">

                <!-- <p class="font-bold mt-3 mb-2">Hinh</p>
            <input class="border w-full p-2 rounded-[4px]" type="file" name="" id=""> -->
                <br>
                <button type="submit" name="capnhat" class="p-2 rounded border mt-3">Cập nhật</button>
            </form>
            <div class="mt-2 text-black-500 font-bold text-red-500">
                <?php
                if (isset($update_acc)) {
                    echo $update_acc;
                }
                ?>
            </div>
            <div>
                
            </div>
        </div>
    </section>