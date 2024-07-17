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
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">ĐĂNG
                    NHẬP</span></h5>
            <div class="bg-light p-30 mb-5">
                <form action="index.php?act=dangnhap" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Tài khoản</label>
                            <input class="form-control" type="text" name="user">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control" type="text" name="pass">
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="newaccount">
                        <label class="custom-control-label" for="newaccount">Ghi nhớ tài khoản?</label>
                    </div>
                    <input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-primary px-3">
                </form>
                <br>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- Checkout End -->