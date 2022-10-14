<?php
ob_start();
error_reporting(0);
session_start();
include "../model/pdo.php";
include "../model/products.php";
include "../model/line.php";
include "../model/account.php";
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
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $keyw = $_POST['key'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['id_commodities']) && ($_GET['id_commodities'] > 0)) {
                $id_line = $_GET['id_commodities'];
            } else {
                $id_line = 0;
            }
            $product_list = loadall_products_line($keyw, $id_line);
            $name_dm = load_name_line($id_line);
            include "./showtheodm.php";
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
            if (isset($_POST['submit'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_account($user, $email, $pass);
                $dktv = "Đã đăng ký thành công.Hãy đăng nhập";
            }
            include "./dangky/form.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                // $email = $_POST['email'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    $error = "Đã đăng nhập thành công";
                    header('location: index.php', time() + 1);
                } else {
                    $error = "Đăng nhập không thành công!";
                }
            }
            include "./dangnhap.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat'])) {
                $id_user = $_POST['id_user'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                update_taikhoan($id_user, $user, $pass, $email, $address, $phone);
                $_SESSION['user'] = check_user($user, $pass);
                // $smg="Cập nhật thành công";
                header('location: index.php?act=edit_taikhoan', time() + 1);
            }
            include "./dangky/edit_taikhoan.php";
            break;
        case 'qmk':
            if (isset($_POST['checkmail'])) {
                // $id_user=$_POST['id_user'];
                // $user = $_POST['user'];
                // $pass = $_POST['pass'];
                // $address = $_POST['address'];
                // $phone = $_POST['phone'];
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là:" . $check_email['password'];
                } else {
                    $thongbao = "Email không tồn tại!";
                }
            }

            include "../view/Forgotpassword/form.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            // include "lienhe.php";
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
