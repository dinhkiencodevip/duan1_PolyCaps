<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/images/logos/Screenshot 2023-11-08 221317.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../libs/animate/animate.min.css" rel="stylesheet">
    <link href="../libs/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="view/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Về tôi</a>
                    <a class="text-body mr-3" href="">Liên hệ</a>
                    <a class="text-body mr-3" href="">Trợ giúp</a>
                    <a class="text-body mr-3" href="">Hỏi đáp</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);

                        ?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                                <?= $user ?>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="index.php?act=mybill" class="dropdown-item" type="button">Đơn hàng của tôi</a>
                                <a href="index.php?act=quenmk" class="dropdown-item" type="button">Quên mật khẩu</a>
                                <a href="index.php?act=edit_taikhoan" class="dropdown-item" type="button">Cập nhật tài
                                    khoản</a>
                                <a href="admin/index.php" class="dropdown-item" type="button">Đăng nhập Admin</a>
                                <a href="index.php?act=thoat" class="dropdown-item" type="button">Thoát</a>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>

                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Tài
                                khoản</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="index.php?act=dangky" class="dropdown-item" type="button">Đăng kí</class=> </a>
                                <a href="index.php?act=dangnhap" class="dropdown-item" type="button">Đăng nhập</class=> </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <img src="view/images/logos/Screenshot 2023-11-08 221317.png"
                        style="width: 330px; height: 70px; object-fit:cover;" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Dịch vụ khách hàng</p>
                <h5 class="m-0">+039 9604 775</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mũ MLB</i></a>
                            <a href="" class="nav-item nav-link">Mũ LV</a>
                            <a href="" class="nav-item nav-link">Mũ Gucci</a>
                        </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <a href="shop.html" class="nav-item nav-link">Sản phẩm</a>
                            <a href="contact.html" class="nav-item nav-link">Liên hệ</a>

                            <span id="totalProduct"></span>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="detail.html" class="btn px-0 ml-3">
                                <a href="index.php?act=addtocart"><i class="fas fa-shopping-cart text-primary"></i></a>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>