<style>
    .thongbao {
        color: red;
    }
</style>

<!-- Navbar End -->


<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Start -->
<div class="container-fluid">
    <form action="index.php?act=billcomfirm" method="post">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">THÔNG
                        TIN KHÁCH HÀNG</span></h5>
                <?php
                if (isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['user'];
                    $email = $_SESSION['user']['email'];
                    $adress = $_SESSION['user']['adress'];
                    $tel = $_SESSION['user']['tel'];
                } else {
                    $name = "";
                    $email = "";
                    $adress = "";
                    $tel = "";
                }

                ?>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Người đặt hàng</label>
                            <input class="form-control" type="text" name="name" value="<?= $name ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?= $email ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="adress" value="<?= $adress ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" type="text" name="tel" value="<?= $tel ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Tổng đơn
                        hàng</span></h5>
                <div class="pt-2">
                    <?php
                    $tong = 0;
                    // $i = 0;
                    // unset($_SESSION['mycart']);
                    
                    foreach ($_SESSION['mycart'] as $index => $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                
                    }

                    ?>
                    <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng tiền : </h5>
                            <h5><?=$tong?>VNĐ</h5>
                        </div>
                </div>
                <br>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">PHƯƠNG
                            THỨC THANH TOÁN</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="pttt" id="paypal">
                                <label class="custom-control-label" for="paypal">Trả tiền khi nhận hàng</label>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="pttt" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Chuyển khoản ngân hàng</label>
                            </div>
                        </div> -->
                        <!-- <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="pttt" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Thanh toán online</label>
                            </div>
                        </div> -->
                        <input class="btn btn-block btn-primary font-weight-bold py-3" type="submit" name="dongydathang"
                            value="ĐỒNG Ý ĐẶT HÀNG"></input></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Các đơn
                        hàng</span></h5>
            </div>
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
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <?php
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
                             </tr>
                                 ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Checkout End -->