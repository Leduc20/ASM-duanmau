<?php
include "../model/pdo.php";
include "../model/products.php";
include "../model/line.php";
include "global.php";
$showProducts = loadall_products_content();
$danhMuc = loadall_line();
$top10 = loadall_products_top10();
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    $number = 0;
    switch ($act) {
        case 'sanpham':

            if (isset($_GET['id_commodities']) && ($_GET['id_commodities']>0)) {
                $id_line = $_GET['id_commodities'];
                $product_list = loadall_products_line("",$id_line);
                $name_line=load_name_line($id_linw);
                include "./showtheodm.php";
            }

            break;
        case 'detail':

            if (isset($_GET['id_hh'])) {
                $id = $_GET['id_hh'];

                $sp = loadone_products($id);
                // extract đưa biến danh mục 
                extract($sp);
                $product_like = loadone_products_like($id, $id_dm);
                include "./detail.php";
            }

            break;

        case 'dktv':
            include "./dangky/form.php";
            break;
        case 'qmk':
            include "./Forgotpassword/form.php";
            break;
        case 'lh':
            include "lienhe.php";
            break;

        default:
            include "slide.php";
            include "content.php";
            break;
    }
} else {
    include "slide.php";
    include "content.php";
}

include "footer.php";
