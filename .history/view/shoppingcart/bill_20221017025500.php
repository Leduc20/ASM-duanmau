<section class="max-w">
        <div class="max-w-[800px] m-auto mt-5">
            <p class="bg-red-200 rounded-[5px] p-2 text-[35px] text-red-700">
                Thông tin người đặt hàng
            </p>
            <?php 
            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                extract($_SESSION['user']);
                $name=$_SESSION['user']['name'];
                $addres=$_SESSION['user']['addres'];
                $email=$_SESSION['user']['email'];
                $phone=$_SESSION['user']['phone'];
            }else{
                $name="";
                $addres="";
                $email="";
                $phone="";
            }
            ?>
            <form action="" method="post">
                <p class="font-bold mt-3 mb-2">Người đặt</p>
                <input class="border w-full p-2 rounded-[4px]" type="email" name="name" id="" value="<?=$name?>">
                <p class="font-bold mt-3 mb-2">Địa chỉ</p>
                <input class="border w-full p-2 rounded-[4px]" type="text" name="addres" id=""  value="<?=$address?>">
                <p class="font-bold mt-3 mb-2">Email</p>
                <input class="border w-full p-2 rounded-[4px]" type="password" name="email" id="" value="<?=$email?>">
                <p class="font-bold mt-3 mb-2">Số điện thoại</p>
                <input class="border w-full p-2 rounded-[4px]" type="text" name="phone" id="" value="<?=$phone?>">
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