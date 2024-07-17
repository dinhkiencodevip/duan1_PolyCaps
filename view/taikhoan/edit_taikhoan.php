<style>
    .thongbao{
        color: red;
    }
</style>
   
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
  
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cập nhật tài khoản</span></h5>
                <div class="bg-light p-30 mb-5">
                    <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                    ?>
                    <form action="index.php?act=dangky" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Tài khoản</label>
                            <input class="form-control" type="text" name="user" value="<?=$user?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control" type="text" name="pass" value="<?=$pass?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" value="<?=$email?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="adress" value="<?=$adress?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" type="text" name="tel" value="<?=$tel?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Vai trò</label>
                            <input class="form-control" type="text" name="role" value="<?=$role?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>"> 
                    <input type="submit" value="CẬP NHẬT" name="capnhat" class="btn btn-primary px-3">
                    <input type="submit" value="NHẬP LẠI" name="" class="btn btn-primary px-3">
                    </form>
                    <br>
                    <h2 class="thongbao">
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout End -->
