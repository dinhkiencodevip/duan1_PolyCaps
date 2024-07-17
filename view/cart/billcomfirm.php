<div class="container-fluid">
    <div class="row px-xl-5">
        <?php
        global $bill;
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="col-lg-8">
            <h3 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">THÔNG TIN
                    ĐẶT HÀNG HÀNG</span></h3>
                <div class="bg-light p-30 mb-5">
                    
                        <h4><li>Mã đơn hàng : PH-<?=$bill['id'];?></li></h4>
                        <br>
                        <h4><li>Ngày đặt hàng hàng : <?=$bill['ngaydathang'];?></li></h4>
                        <br>
                        <h4><li>Tổng đơn hàng đơn hàng : <?=$bill['total'];?>VNĐ</li></h4>
                        <br>
                        <h4><li>Phương thức thanh toán : Trả tiền khi nhận hàng</li></h4>
                    
                </div>
        </div>
        <div class="col-lg-8">
            <h3 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">CHI TIẾT GIỎ HÀNG</span></h3>
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
                                    show_chitiet_bill($billct);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>