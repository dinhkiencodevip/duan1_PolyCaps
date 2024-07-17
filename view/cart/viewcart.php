<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành Tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                        viewcart();
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">PHẦN THANH
                    TOÁN</span></h5>
            <div class="bg-light p-30 mb-5">
                <?php
                $tong = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[2];
                    $ttien = $cart[3] * $cart[4];
                    $tong += $ttien;
                }
                echo '
                    <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Tổng đơn hàng</h5>
                        <h5>' . $tong . ' VNĐ</h5>
                    </div>
                    <a href="index.php?act=bill"><button class="btn btn-block btn-primary font-weight-bold my-3 py-3" name="outtocart" >TIẾP TỤC ĐẶT HÀNG</button></a>
                </div>
                    ';
                ?>
            </div>
           
        </div>
    </div>
</div>