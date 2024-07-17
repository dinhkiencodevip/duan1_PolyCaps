<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>Số LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    <?php 
                    if(is_array($listbill)){
                        foreach($listbill as $bill){
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                    
                    echo'
                    <tbody class="align-middle">
                    <tr>
            <td class="align-middle">PH-'.$bill['id'].'</td>
            <td class="align-middle">'.$bill['ngaydathang'].'</td>
            <td class="align-middle"> '.$countsp.'</td>
            <td class="align-middle">' . $bill['total'] . ' VNĐ</td>
            <td class="align-middle">' . $ttdh . ' </td>
         
                </tbody>
                    ';
                        }
                    }
                    ?>
                </thead>
            </table>
        </div>
    </div>
</div>