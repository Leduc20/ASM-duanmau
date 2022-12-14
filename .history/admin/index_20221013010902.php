<?php

include "../model/pdo.php";
include "../model/line.php";
include "../model/products.php";
include "../model/account.php";
include "header.php";
include "nav.php";
// $VIEW_NAME="header.php";
// controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //loại hàng
        case 'addlh':
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_line($tenloai);
                $error = "Thêm thành công";
            }
            include "./line/add.php";
            break;
        case 'dslh':
            $listline = loadall_line();
            include "./line/list.php";
            break;
        case 'deletelh':
            if (isset($_GET['id_commodities'])) {
                delete_line($_GET['id_commodities']);
            }
            $listline = loadall_line();
            include "./line/list.php";
            break;
        case 'editlh':
            if (isset($_GET['id_commodities'])) {

                $dm = loadone_line($_GET['id_commodities']);
            }
            $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
            $listline = pdo_query_one($sql);
            include "./line/upadate.php";
            break;
        case 'update':
            if (isset($_POST['update'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_line($id, $tenloai);
                $error = "Cập nhật thành công";
            }
            $listline = loadall_line();
            include "./line/list.php";
            break;

            //hàng hoa\
        case 'addhh':
            if (isset($_POST['themmoi'])) {
                $idlh = $_POST['idlh'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $sale = $_POST['sale'];
                $detail = $_POST['detail'];
                //lay ra anh va ten
                $filename = $_FILES['image']['name'];
                //noi duoc uplaod anh
                $folder = "../upload/";
                $targetupload = $folder . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
                } else {
                }
                insert_products($name, $filename, $price, $detail, $sale, $idlh);
                $error = "Thêm thành công";
            }
            $listline = loadall_line();
            include "./products/add.php";
            break;
        case 'dshh':
            if (isset($_POST['seach'])) {
                $key = $_POST['key'];
                $idlh = $_POST['idlh'];
            } else {
                $key = '';
                $idlh = 0;
            }
            $listline = loadall_line();
            $listproducts = loadall_products($key, $idlh);
            include "./products/list.php";
            break;
        case 'deletehh':
            if (isset($_GET['id_hh']) && ($_GET['id_hh'] > 0)) {
                delete_products($_GET['id_hh']);
            }
            $listproducts = loadall_products('', 0);
            // var_dump($listproducts);
            include "./products/list.php";
            break;
        case 'edithh':
            if (isset($_GET['id_hh'])) {

                $product = loadone_products($_GET['id_hh']);
            }
            // $sql = "SELECT * FROM ` commodities` order by id desc";
            // $listproducts = pdo_query($sql);
            $listline = loadall_line();
            include "./products/update.php";
            break;
        case 'updatehh':

            if (isset($_POST['updatehh'])) {
                $id_hh = $_POST['id_hh'];
                $idlh = $_POST['idlh'];
                $name = $_POST['namesp'];
                $price = $_POST['price'];
                $sale = $_POST['sale'];
                $detail = $_POST['detail'];
                //lay ra anh va ten
                $filename = $_FILES['image']['name'];
                //noi duoc uplaod anh
                $folder = "../upload/";
                $targetupload = $folder . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
                } else {
                }
                update_products($id_hh, $name, $filename, $price, $detail, $sale, $idlh);
                $error = "Thêm thành công";
            }
            $listline = loadall_line();
            $listproducts = loadall_products('', 0);
            include "./products/list.php";
            break;
            // case 'addhh':
            //     include "./products/add.php";
            //     break;
            // case 'dshh':
            //     include "./products/list.php";
            //     break;
            // case 'updatesp':
            //     include "./products/list.php";
            //     break;
            //khach hang
        case 'addkh':
            include "./listuser/add.php";
            break;
        case 'dskh':
            if (isset($_GET['id_hh']) && ($_GET['id_hh'] > 0)) {
                delete_products($_GET['id_hh']);
            }
            $listaccount = loadall_account();
            include "./listuser/list.php";
            break;
        case 'del_account':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                delete_account($_GET['id_user']);
            }
            $listaccount = loadall_account();
            // var_dump($listproducts);
            include "./listuser/list.php";
            break;
            //Binh luan
        case 'dsbl':
            include "./comment/list.php";
            break;
        case 'blct':
            include "./comment/detail.php";
            break;
            //thong kê
        case 'dstk':
            include "./statistic/list.php";
            break;
        case '':
            include "./thongke/danhsach.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
