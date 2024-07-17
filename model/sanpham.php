<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $mau, $soluong, $iddm)
{
    $sql = "insert into sanpham(namesp,price,img,mota,color,so_luong,iddm) values('$tensp','$giasp','$hinh','$mota','$mau','$soluong','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_mlb()
{
    $sql = "select * from sanpham where namesp like '%MLB%' ";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_gucci()
{
    $sql = "select * from sanpham where namesp like '%Gucci%' ";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_lv()
{
    $sql = "select * from sanpham where namesp like '%LV%' ";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=" . $iddm . " AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $tensp, $giasp, $hinh, $mota, $mau, $soluong)
{
    if ($hinh != "")
        $sql = "update sanpham set iddm='" . $iddm . "', namesp='" . $tensp . "', price='" . $giasp . "', img='" . $hinh . "', mota='" . $mota . "', color='" . $mau . "', so_luong='" . $soluong . "'  where id=" . $id;
    else
        $sql = "update sanpham set iddm='" . $iddm . "', namesp='" . $tensp . "', price='" . $giasp . "', mota='" . $mota . "', color='" . $mau . "', so_luong='" . $soluong . "' where id=" . $id;
    pdo_execute($sql);
}
?>