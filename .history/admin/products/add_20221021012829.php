<?php
if (isset($_POST['themmoi'])) {
    // $idlh = $_POST['idlh'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $detail = $_POST['detail'];
    $view = $_POST['view'];

    if($price >= 0){
        $error_
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#checkproduct").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "name": {
                        required: true,
                        name: true
                    },
                    "price": {
                        required: true,
                        maxlength: 15
                    },
                    "sale": {
                        required: true,
                        maxlength: 8
                    },
                    "image": {
                        required: true,
                        // minlength: 8

                    },
                    "detail": {
                        required: true,
                        // minlength: 8

                    },
                    "view": {
                        required: true,
                        // minlength: 8

                    }
                },
                messages: {
                    "name": {
                        required: "B???t bu???c nh???p name",
                        name: "H??y nh???p ????ng ?????nh d???ng name"
                    },
                    "price": {
                        required: "B???t bu???c nh???p gi??",
                        // maxlength: "H??y nh???p t???i ??a 15 k?? t???"
                    },
                    "sale": {
                        required: "B???t bu???c nh???p gi?? sale",
                        // minlength: "H??y nh???p ??t nh???t 15 k?? t???"
                    },
                    "image": {
                        equalTo: "B???t bu???c ch???n h??nh ???nh",
                        minlength: "H??y nh???p ??t nh???t 8 k?? t???"
                    },
                    "detail": {
                        equalTo: "B???t bu???c nh???p m?? t??? chi ti???t",
                        // minlength: "H??y nh???p ??t nh???t 8 k?? t???"
                    },
                    "view": {
                        equalTo: "B???t bu???c nh???p s??? l?????t xem",
                        // minlength: "H??y nh???p ??t nh???t 8 k?? t???"
                    }
                }

            });
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <section class="mt-[-366px] ml-[99px]">
        <div class="max-w-[1200px] mx-auto">
            <div class="border bg-green-200 mt-2 rounded">
                <p class="ml-3 mt-3">Th??m m???i s???n ph???m</p>
            </div>
            <div class="mt-2 text-black-500 font-bold text-red-500">
                <?php
                if (isset($pro)) {
                    echo $pro;
                }
                ?>
            </div>
            <div>
                <form onsubmit="return checkSelect()" action="index.php?act=addhh" method="post" id="checkproduct" enctype="multipart/form-data">
                    <div class="grid grid-cols-3 gap-8">
                        <div>
                            <p class="font-bold mt-3 mb-2">M?? s???n ph???m</p>
                            <input class="border w-full p-2 rounded-[4px]" placeholder="Kh??ng c???n nh???p" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">T??n s???n ph???m</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="name">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">????n gi??</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="price" id="price">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Gi???m gi??</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="sale" id="sale">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">H??nh ???nh</p>
                            <input class="border w-full p-2 rounded-[4px]" type="file" name="image" id="image">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">M?? t???</p>
                            <textarea class="border" name="detail" id="detail" cols="49" rows="5"></textarea>
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">View</p>
                            <input class="border w-full p-2 rounded-[4px]" type="number" name="view" id="view">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Lo???i h??ng</p>
                            <select class="border w-[382px] h-[45px] rounded" name="idlh" id="myselect">
                                <?php
                                foreach ($listline as $show) {
                                    extract($show);
                                    echo '<option value="' . $id_commodities . '">' . $name . '</option> ';
                                }
                                ?>

                            </select>
                        </div>

                        <!-- <div>

                            <p class="font-bold mt-3 mb-2">H??ng ?????c bi???t</p>
                            <div class="border h-[48px] w-[382px]">
                                <div class="mt-[10px] ml-[20px]">
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        ?????c bi???t
                                    </label>
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        B??nh th?????ng
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div>
                            <p class="font-bold mt-3 mb-2">Ng??y nh???p</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->
                        <!-- <div>
                            <p class="font-bold mt-3 mb-2">S??? l?????t xem</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->

                    </div>

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="themmoi">Th??m m???i</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nh???p l???i</button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=dshh">Danh s??ch</a>
                </form>
            </div>
        </div>
    </section>
</body>

</html>