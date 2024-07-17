<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
include "model/taikhoan.php";
include "model/cart.php";



if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_mlb();
$spnew1 = loadall_sanpham_gucci();
$spnew2 = loadall_sanpham_lv();
$dsdm = loadall_danhmuc();



if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'spchitiet':

            if ((isset($_GET['idsp'])) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sanpham_cungloai = load_sanpham_cungloai($id, $iddm);
                include "view/spchitiet.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $adress = $_POST['adress'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                insert_taikhoan($user, $pass, $email, $adress, $tel, $role);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Bạn đã đăng nhập thành công!";
                    // include"view/home.php";
                    // header('location: /');
                    echo "<script>location.href = 'index.php'</script>";

                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $id = $_POST['id'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $adress = $_POST['adress'];
                $tel = $_POST['tel'];

                update_taikhoan($id, $user, $pass, $email, $adress, $tel);
                $_SESSION['user'] = checkuser($user, $pass);

            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'thoat':
            session_destroy();
            echo "<script>location.href = 'index.php'</script>";
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {

                $id = $_POST['id'];
                $img = $_POST['img'];
                $namesp = $_POST['name'];
                $price = $_POST['price'];
                $soluong = 1;
                $tongtien = $price + $price;
                $ttien = $soluong * $price;
                $spadd = [$id, $namesp, $img, $price, $soluong, $ttien, $tongtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;

        case 'delcart':

            if (isset($_GET['idcart'])) {
                $index = $_GET['idcart'];
                array_splice($_SESSION['mycart'], $index, 1);


            } else {
                $_SESSION['mycart'] = [];

            }
            echo "<script>window.location.href = 'index.php?act=addtocart'</script>";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billcomfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user']))
                $iduser = $_SESSION['user']['id'];
                else
                $id = 0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['adress'];
                $tel = $_POST['tel'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                $idbill = insert_bill($iduser ,$name, $address, $tel, $email, $ngaydathang, $tongdonhang);

                //  insert into cart : $session['mycarrt'] & idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                // xóa session cart
                $_SESSION['cart'] = [];

                
                
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
           
            include "view/cart/billcomfirm.php";
            break;

        case 'mybill':
             $listbill = loadall_bill($_SESSION['user']['id']);
             include "view/cart/mybill.php";
             break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>