<style>
    .pd {
        padding-left: 280px;
        padding-top: 70px;
    }

    .mb10 {
        padding-left: 15px;
    }

    .a {
        margin: 10px 5px;
    }
</style>
<div class="page-wrapper pd">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Bảng danh đơn hàng </h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="index.php?act=listbill" method="post">
                    <input type="text" name="kyw" id="" placeholder="Nhập mã đơn hàng">
                    <br>
                    <input type="submit" value="GO" name="listok">
                </form>
                <div class="card">
                    <table class="table">
                        <tr>

                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG</th>
                            <th>SỐ LƯỢNG HÀNG</th>
                            <th>GIÁ TRỊ ĐƠN HÀNG</th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>THAO TÁC</th>
                        </tr>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $kh = $bill["bill_name"] . '
                            <br> ' . $bill["bill_email"] . '
                            <br> ' . $bill["bill_address"] . '
                            <br> ' . $bill["bill_tel"];
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                   
                                    <td>DAM-' . $bill['id'] . '</td>
                                    <td>' . $kh . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $bill['total'] . ' VNĐ</td>
                                    <td>' . $ttdh . '</td>
                                    <td>' . $bill['ngaydathang'] . '</td>
                                    <td><a href=""><input type="button" value="Sửa"></a> <a href=""><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                        }
                        ?>
                    </table>
                </div>

            </div>
        </div>

    </div>
    <div class="mb10">
        <input class="a" type="button" value="Chọn tất cả">
        <input class="a" type="button" value="Bỏ chọn tất cả">
        <input class="a" type="button" value="Xóa các mục đã chọn">
    </div>
</div>