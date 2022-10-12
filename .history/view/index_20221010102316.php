<?php
include "../model/pdo.php";
include "../model/products.php";
include "../model/line.php";
include "global.php";

include "header.php";
$showProducts = loadall_products_content();
$danhMuc = loadall_line();
$top10 = loadall_products_top10();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    $number=0;
    switch ($act) {
        case 'detail':
            if (isset($_GET['id_hh'])) {
                $id = $_GET['id_hh'];
                $sp= loadone_products($id);
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
?>
