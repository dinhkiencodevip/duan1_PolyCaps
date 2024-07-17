<?php
function viewcart()
{
    global $img_path;
    $tong = 0;
    // $i = 0;
    // unset($_SESSION['mycart']);

    foreach ($_SESSION['mycart'] as $index => $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoasp = "index.php?act=delcart&idcart=$index";
        echo '
            <tr>
            <td class="align-middle"><img src="' . $hinh . '" alt="" style="width: 50px;"> ' . $cart[1] . '
            </td>
            <td class="align-middle">' . $cart[3] . ' VNĐ</td>
            <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width: 100px;">
                   
                    <input type="text"
                        class="form-control form-control-sm bg-secondary border-0 text-center" value="' . $cart[4] . '">
                   
                </div>
            </td>
            <td class="align-middle">' . $ttien . ' VNĐ</td>
            <td class="align-middle"><a class="btn btn-sm btn-danger" href="' . $xoasp . '"><i
                        class="fa fa-times"></i></a></td>
        </tr>
            ';
        // $i += 1;
    }

}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    // $i = 0;
    // unset($_SESSION['mycart']);

    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
            <tr>
            <td class="align-middle"><img src="' . $hinh . '" alt="" style="width: 50px;"> ' . $cart['name'] . '
            </td>
            <td class="align-middle">' . $cart['price'] . ' VNĐ</td>
            <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width: 100px;">
                   
                    <input type="text"
                        class="form-control form-control-sm bg-secondary border-0 text-center" value="' . $cart['soluong'] . '">
                   
                </div>
            </td>
            <td class="align-middle">' . $cart['thanhtien'] . ' VNĐ</td>
        </tr>
            ';
        // $i += 1;
    }

}
?>
<?php
function tongdonhang()
{

    $tong = 0;
    // $i = 0;
    // unset($_SESSION['mycart']);

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;


        // $i += 1;
    }
    return $tong;

}
function insert_bill($iduser, $name, $address, $tel, $email, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_address,bill_tel,bill_email,ngaydathang,total) values('$iduser','$name', '$address', '$tel', '$email', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{

    $sql = "SELECT * FROM bill where 1";
    if ($iduser > 0)
        $sql .= " AND iduser=" . $iduser;
    if ($kyw != "")
        $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đamg xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '4':
            $tt = "Hoàn tất";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
?>
<?php
function show_chitiet_bill($listbill)
{
    global $img_path;
    $tong = 0;
    // $i = 0;
    // unset($_SESSION['mycart']);

    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
     <tr>
     <td class="align-middle"><img src="' . $hinh . '" alt="" style="width: 50px;"> ' . $cart['name'] . '
     </td>
     <td class="align-middle">' . $cart['price'] . ' VNĐ</td>
     <td class="align-middle">
         <div class="input-group quantity mx-auto" style="width: 100px;">
            
             <input type="text"
                 class="form-control form-control-sm bg-secondary border-0 text-center" value="' . $cart['soluong'] . '">
            
         </div>
     </td>
     <td class="align-middle">' . $cart['thanhtien'] . ' VNĐ</td>
 </tr>
     ';
    }

}

?>
<?php

?>